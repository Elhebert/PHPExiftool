<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test;

use DirectoryIterator;
use Monolog\Handler\NullHandler;
use Monolog\Logger;
use PHPExiftool\Exception\LogicException;
use PHPExiftool\Exiftool;
use PHPExiftool\PreviewExtractor;
use PHPUnit\Framework\TestCase;

class PreviewExtractorTest extends TestCase
{
    /**
     * @covers \PHPExiftool\PreviewExtractor::extract
     */
    public function testExtract(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir().'/tests'.mt_rand(10000, 99999);

        mkdir($tmpDir);

        $files = $extractor->extract(__DIR__.'/../../../files/ExifTool.jpg', $tmpDir);

        $this->assertInstanceOf(DirectoryIterator::class, $files);

        $n = 0;
        $unlinks = [];

        foreach ($files as $file) {
            if ($file->isDot() || $file->isDir()) {
                continue;
            }

            $unlinks[] = $file->getPathname();
            $n++;
        }

        foreach ($unlinks as $u) {
            unlink($u);
        }

        $this->assertEquals(1, $n);
    }

    public function testExtractWrongFile(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir().'/tests'.mt_rand(10000, 99999);

        $this->expectException(LogicException::class);
        $extractor->extract(__DIR__.'/ExifTool.jpg', $tmpDir);
    }

    public function testExtractWrongDir(): void
    {
        $extractor = new PreviewExtractor($this->getExiftool());

        $tmpDir = sys_get_temp_dir().'/tests'.mt_rand(10000, 99999);

        $this->expectException(LogicException::class);
        $extractor->extract(__DIR__.'/../../../files/ExifTool.jpg', $tmpDir);
    }

    protected function getExiftool(): Exiftool
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler);

        return new Exiftool($logger);
    }
}
