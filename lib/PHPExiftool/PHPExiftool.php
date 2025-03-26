<?php

namespace PHPExiftool;

use Exception;
use PHPExiftool\ClassUtils\tagGroupBuilder;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class PHPExiftool
{
    const v = '4.1.1';

    const ROOT_NAMESPACE = 'PHPExiftool\\Driver';

    const SUBDIR = 'TagGroup';

    private LoggerInterface $logger;

    private Factory $factory;

    public function __construct(?LoggerInterface $logger = null)
    {
        if ($logger === null) {
            $logger = new NullLogger;
        }

        $this->setLogger($logger);
        $this->factory = new Factory($this);
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * @param  array<string>  $options
     * @param  array<string>  $lngs
     *
     * @throws Exception
     */
    public function generateClasses(array $options, array $lngs = ['en'], ?callable $cb = null): int
    {
        $classesDirectory = __DIR__.'/Driver/'.self::SUBDIR;
        $rootNamespace = self::ROOT_NAMESPACE.'\\'.self::SUBDIR;

        $dumper = new InformationDumper(new Exiftool($this->logger));

        $group_ids = [];
        $dumper->dumpClasses(
            $options,
            $lngs,
            $cb ?: function (string $fq_classname, tagGroupBuilder $tgb) use ($classesDirectory, &$group_ids) {
                $tgb->write($classesDirectory);
                $group_ids[$tgb->getProperty('id')] = $fq_classname;
            }
        );

        if (! $cb) {
            $this->logger->info('Writing helper Table');
            ksort($group_ids, SORT_NATURAL + SORT_FLAG_CASE);
            $file = $classesDirectory.'/Helper.php';
            file_put_contents($file,
                "<?php\n"
                .'namespace '.$rootNamespace.";\n\n"
                .'use '.self::ROOT_NAMESPACE."\\HelperInterface;\n\n"
                ."class Helper implements HelperInterface\n"
                ."{\n"
                ."    static function getIndex(): array {\n"
                .'        return '.var_export($group_ids, true).";\n"
                ."    }\n"
                ."}\n"
            );
        }

        return count($group_ids);
    }

    public function isClassesGenerated(): bool
    {
        $p = __DIR__.'/Driver/'.self::SUBDIR.'/Helper.php';

        return file_exists($p);
    }

    public function getFactory(): Factory
    {
        return $this->factory;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    public function getClassesRootDirectory(): string
    {
        return __DIR__.'/Driver/'.self::SUBDIR;
    }
}
