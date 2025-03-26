<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool;

use Doctrine\Common\Collections\ArrayCollection;
use Iterator;
use PHPExiftool\Exception\EmptyCollectionException;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exception\RuntimeException;
use PHPExiftool\FileEntity;
use PHPExiftool\PHPExiftool;
use PHPExiftool\Reader;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

class ReaderTest extends TestCase
{
    private ?PHPExiftool $PHPExiftool = null;

    protected static string $tmpDir = '';

    protected static bool $disableSymLinkTest = false;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $tmpDir = __DIR__.'/tmp';

        if (defined('PHP_WINDOWS_VERSION_BUILD')) {
            $command = ['rmdir', '/q', '/s', escapeshellarg($tmpDir)];
        } else {
            $command = ['rmdir', '-Rf', escapeshellarg($tmpDir)];
        }

        $process = new Process($command);
        $process->run();

        if (! is_dir($tmpDir)) {
            mkdir($tmpDir);
        }

        self::$tmpDir = $tmpDir.'/exiftool_reader';

        if (! is_dir(self::$tmpDir)) {
            mkdir(self::$tmpDir);
        }

        copy(__DIR__.'/../../files/ExifTool.jpg', self::$tmpDir.'/test2.jpg');
        copy(__DIR__.'/../../files/ExifTool.jpg', self::$tmpDir.'/test.jpg');

        if (! is_dir(self::$tmpDir.'/dir')) {
            mkdir(self::$tmpDir.'/dir');
        }
        if (! is_dir(self::$tmpDir.'/usr')) {
            mkdir(self::$tmpDir.'/usr');
        }

        $tmpDir2 = $tmpDir.'/exiftool_reader2';

        if (! is_dir($tmpDir2)) {
            mkdir($tmpDir2);
        }

        copy(__DIR__.'/../../files/ExifTool.jpg', $tmpDir2.'/test2.jpg');

        if (defined('PHP_WINDOWS_VERSION_BUILD')) {
            self::$disableSymLinkTest = true;
        } elseif (! is_link(self::$tmpDir.'/symlink')) {

            if (! @symlink($tmpDir2, self::$tmpDir.'/symlink')) {
                self::$disableSymLinkTest = true;
            }
        }

        copy(__DIR__.'/../../files/plop/CanonRaw.cr2', self::$tmpDir.'/dir/CanonRaw.cr2');

        $tmpDir3 = $tmpDir.'/exiftool_reader3';

        if (! is_dir($tmpDir3)) {
            mkdir($tmpDir3);
        }

        if (! is_dir($tmpDir3.'/.svn')) {
            mkdir($tmpDir3.'/.svn');
        }

        if (! is_dir($tmpDir3.'/.roro')) {
            mkdir($tmpDir3.'/.roro');
        }

        if (! is_dir($tmpDir3.'/.git')) {
            mkdir($tmpDir3.'/.git');
        }

        touch($tmpDir3.'/.git/config');
        touch($tmpDir3.'/.roro/.roro.tmp');
        copy(__DIR__.'/../../files/ExifTool.jpg', $tmpDir3.'/.exiftool.jpg');

    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->PHPExiftool = new PHPExiftool('/tmp');
    }

    private function createReader(): Reader
    {
        return $this->PHPExiftool->getFactory()->createReader();
    }

    /**
     * @covers Reader::__destruct
     */
    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @covers Reader::getIterator
     */
    public function test_get_iterator(): void
    {
        $file = self::$tmpDir.'/test.jpg';
        $reader = $this->createReader();
        $this->assertInstanceOf(Iterator::class, $reader->files($file)->getIterator());
    }

    /**
     * @covers Reader::append
     * @covers Reader::all
     */
    public function test_append(): void
    {
        $reader1 = $this->createReader();
        $file1 = self::$tmpDir.'/test.jpg';
        $file2 = self::$tmpDir.'/test2.jpg';
        $file3 = self::$tmpDir.'/dir/CanonRaw.cr2';
        $this->assertCount(1, $reader1->files($file1)->all());

        $reader2 = $this->createReader();
        $reader2->files([$file2, $file3]);
        $this->assertCount(3, $reader2->append($reader1)->all());
    }

    /**
     * @covers Reader::sort
     * @covers Reader::all
     */
    public function test_sort(): void
    {
        $file1 = self::$tmpDir.'/test.jpg';
        $file2 = self::$tmpDir.'/test2.jpg';
        $file3 = self::$tmpDir.'/dir/CanonRaw.cr2';

        $reader = $this->createReader();
        $reader->files([$file3, $file2, $file1]);
        $reader->sort(['directory', 'filename', 'cigarette']);

        $results = [];

        foreach ($reader->all() as $entity) {
            $results[] = basename($entity->getFile());
        }

        $this->assertSame(['test.jpg', 'test2.jpg', 'CanonRaw.cr2'], $results);
    }

    /**
     * @covers Reader::files
     * @covers Reader::buildQuery
     *
     * @throws EmptyCollectionException
     */
    public function test_files(): void
    {
        $reader = $this->createReader();

        $file1 = self::$tmpDir.'/test.jpg';
        $reader->files($file1);

        $file2 = $reader->files(self::$tmpDir.'/test.jpg')->first()->getFile();

        $this->assertEquals(realpath($file1), realpath($file2));
    }

    /**
     * @covers Reader::resetResults
     */
    public function test_reset_filters(): void
    {
        $reader = $this->createReader();

        $file = self::$tmpDir.'/test.jpg';
        $reader->files($file)->all();
        $file = self::$tmpDir.'/test2.jpg';
        $reader->files($file)->all();

        $this->assertCount(2, $reader->all());
    }

    /**
     * @covers Reader::ignoreDotFiles
     * @covers Reader::all
     */
    public function test_ignore_vcs(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir.'3');
        $this->assertCount(1, $reader->all());
    }

    /**
     * @covers Reader::ignoreDotFiles
     * @covers Reader::all
     */
    public function test_ignore_dot_files(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir.'3');
        $this->assertCount(1, $reader->all());

        $reader->ignoreDotFiles()->in(self::$tmpDir.'3');
        $this->assertCount(0, $reader->all());
    }

    /**
     * @covers Reader::in
     * @covers Reader::buildQuery
     * @covers Reader::all
     */
    public function test_in(): void
    {
        $reader = $this->createReader();

        $reader->reset()->in(self::$tmpDir);
        $this->assertCount(3, $reader->all());

        $reader->reset()->in(self::$tmpDir.'/dir');
        $this->assertCount(1, $reader->all());

        $reader->reset()->in(__DIR__.'/../../../vendor/exiftool/exiftool/');

        foreach ($reader as $file) {
            $m = $file->getMetadatas();
            $this->assertEquals(basename($file->getFile()), $file->getMetadatas()->get('System:FileName')->getValue()->asString());
        }
    }

    /**
     * @covers Reader::exclude
     * @covers Reader::computeExcludeDirs
     * @covers Reader::buildQuery
     * @covers Reader::all
     */
    public function test_exclude(): void
    {
        $reader = $this->createReader();

        $reader
            ->in(self::$tmpDir)
            ->exclude(self::$tmpDir.'/dir');

        $this->assertCount(2, $reader->all());
    }

    /**
     * @covers Reader::computeExcludeDirs
     * @covers Reader::all
     */
    #[DataProvider('getExclude')]
    public function test_compute_exclude_dirs(string $dir): void
    {
        $reader = $this->createReader();

        $reader
            ->in(self::$tmpDir)
            ->exclude($dir)
            ->all();
    }

    /**
     * @return array<string>
     */
    public static function getExclude(): array
    {
        return [
            [self::$tmpDir.'/dir/'],
            [self::$tmpDir.'/dir'],
            ['dir'],
            ['/dir'],
            ['/usr'],
            ['usr'],
            ['dir/'],
        ];
    }

    /**
     * @covers Reader::computeExcludeDirs
     * @covers \PHPExiftool\Exception\RuntimeException
     */
    #[DataProvider('getWrongExclude')]
    public function test_compute_exclude_dirs_fail(string $dir): void
    {
        $reader = $this->createReader();

        $this->expectException(RuntimeException::class);
        $reader
            ->in(self::$tmpDir)
            ->exclude($dir)
            ->all();
    }

    /**
     * @return array<string>
     */
    public static function getWrongExclude(): array
    {
        return [
            [self::$tmpDir.'/dir/dir2'],
            [self::$tmpDir.'/dirlo'],
            ['dir/dir2'],
            ['/usr/local'],
            ['usr/local'],
            ['/tmp'],
        ];
    }

    /**
     * @covers Reader::extensions
     * @covers Reader::buildQuery
     * @covers Reader::buildQueryAndExecute
     */
    public function test_extensions(): void
    {
        $reader = $this->createReader();
        $reader->in(self::$tmpDir);
        $this->assertCount(3, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->notRecursive()->extensions(['cr2']);
        $this->assertCount(0, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(['cr2']);
        $this->assertCount(1, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(['jpg']);
        $this->assertCount(2, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions('jpg')->extensions('cr2');
        $this->assertCount(3, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(['jpg'], false);
        $this->assertCount(1, $reader->all());

        $reader = $this->createReader();
        $reader->in(self::$tmpDir)->extensions(['cr2', 'jpg'], false)->notRecursive();
        $this->assertCount(0, $reader->all());
    }

    /**
     * @covers Reader::extensions
     * @covers \PHPExiftool\Exception\LogicException
     */
    public function test_extensions_mis_use(): void
    {
        $reader = $this->createReader();

        $this->expectException(LogicException::class);
        $reader->extensions('exiftool')->extensions('jpg', false);
    }

    /**
     * @covers Reader::followSymLinks
     */
    public function test_follow_sym_links(): void
    {
        if (self::$disableSymLinkTest) {
            $this->markTestSkipped('This system does not support symlinks');
        }

        $reader = $this->createReader();

        $reader->in(self::$tmpDir)
            ->followSymLinks();

        $this->assertInstanceOf(ArrayCollection::class, $reader->all());
        $this->assertCount(4, $reader->all());
    }

    /**
     * @covers Reader::notRecursive
     * @covers Reader::buildQuery
     */
    public function test_not_recursive(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir)->notRecursive();
        $this->assertCount(2, $reader->all());
    }

    /**
     * @covers Reader::getOneOrNull
     */
    public function test_get_one_or_null(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir)->notRecursive()->extensions(['jpg', 'cr2'], false);

        $this->assertNull($reader->getOneOrNull());
    }

    /**
     * @covers Reader::first
     * @covers \PHPExiftool\Exception\EmptyCollectionException
     */
    public function test_first_empty(): void
    {
        $reader = $this->createReader();

        $this->expectException(EmptyCollectionException::class);
        $reader->in(self::$tmpDir)->notRecursive()->extensions(['jpg', 'cr2'], false);
        $reader->first();
    }

    /**
     * @covers Reader::first
     */
    public function test_first(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir);

        $this->assertInstanceOf(FileEntity::class, $reader->first());
    }

    /**
     * @covers Reader::buildQuery
     */
    public function test_fail(): void
    {
        $reader = $this->createReader();

        $this->expectException(LogicException::class);
        $reader->all();
    }

    /**
     * @covers Reader::all
     * @covers Reader::buildQueryAndExecute
     */
    public function test_all(): void
    {
        $reader = $this->createReader();

        $reader->in(self::$tmpDir);

        $this->assertInstanceOf(ArrayCollection::class, $reader->all());
        $this->assertCount(3, $reader->all());
    }
}
