<?php

namespace PHPExiftool;

use PHPExiftool\ClassUtils\tagGroupBuilder;
use PHPExiftool\Driver\TagGroupFactory;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use PHPExiftool\Exception\DirectoryNotFoundException;

class PHPExiftool
{
    const v = "4.1.1";
    const ROOT_NAMESPACE = "PHPExiftool\\Driver";
    const SUBDIR = "TagGroup";

    private ?string $classesRootDirectory = null;
    private LoggerInterface $logger;
    private Factory $factory;

    public function __construct(?string $classesRootDirectory = null, ?LoggerInterface $logger = null)
    {
        if($classesRootDirectory !== null) {
            $this->setClassesRootDirectory($classesRootDirectory);
        }
        if($logger === null) {
            $logger = new NullLogger();
        }
        $this->setLogger($logger);
        $this->factory = new Factory($this);
    }



    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string|null $classesRootDirectory
     */
    public function setClassesRootDirectory(?string $classesRootDirectory): void
    {
        $c = substr($classesRootDirectory, 0, 1);
        if ($c !== '/') {
            throw new DirectoryNotFoundException(sprintf("classesRootDirectory must be absolute, \"%s\" given", $classesRootDirectory));
        }
        if (!file_exists($classesRootDirectory) || !is_writable($classesRootDirectory)) {
            throw new DirectoryNotFoundException(sprintf("classesRootDirectory \"%s\" must exists and be writable", $classesRootDirectory));
        }

        $this->classesRootDirectory = realpath($classesRootDirectory);
    }

    public function generateClasses(array $options, array $lngs = ['en'], ?callable $cb = null): int
    {
        $classesDirectory = $this->classesRootDirectory . '/' . self::SUBDIR;
        $rootNamespace = self::ROOT_NAMESPACE . '\\' . self::SUBDIR;

        $dumper = new InformationDumper(new Exiftool($this->logger));

        $group_ids = [];
        $dumper->dumpClasses(
            $options,
            $lngs,
            $cb ?: function (string $fq_classname, tagGroupBuilder $tgb) use($classesDirectory, &$group_ids)  {
                $tgb->write($classesDirectory);
                $group_ids[$tgb->getProperty('id')] = $fq_classname;
            }
        );

        if(!$cb) {
            $this->logger->info(sprintf("Writing helper Table"));
            ksort($group_ids, SORT_NATURAL + SORT_FLAG_CASE);
            $file = $classesDirectory . '/Helper.php';
            file_put_contents($file,
                "<?php\n"
                . "namespace " . $rootNamespace . ";\n\n"
                . "use " . self::ROOT_NAMESPACE . "\\HelperInterface;\n\n"
                . "class Helper implements HelperInterface\n"
                . "{\n"
                . "    static function getIndex(): array {\n"
                . "        return " . var_export($group_ids, true) . ";\n"
                . "    }\n"
                . "}\n"
            );
        }

        return count($group_ids);
    }

    public function isClassesGenerated(): bool
    {
        $p = $this->classesRootDirectory . '/' . self::SUBDIR . "/Helper.php";
        return file_exists($p);
    }

    /**
     * @return Factory
     */
    public function getFactory(): Factory
    {
        return $this->factory;
    }

    /**
     * @return LoggerInterface|NullLogger|null
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @return string
     */
    public function getClassesRootDirectory(): string
    {
        return $this->classesRootDirectory;
    }
}
