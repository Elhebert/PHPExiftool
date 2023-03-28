<?php
/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Test;

use Monolog\Logger;
use Monolog\Handler\NullHandler;
use PHPExiftool\Exception\InvalidArgumentException;
use PHPExiftool\InformationDumper;
use PHPExiftool\Exiftool;
use PHPExiftool\Exception\DirectoryNotFoundException;

class InformationDumperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var InformationDumper
     */
    protected $object;

    protected function setUp()
    {
        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());

        $this->object = new InformationDumper(new Exiftool($logger), "./Driver", "PHPExiftool\\Driver");
    }

    /**
     * @covers PHPExiftool\InformationDumper::listDatas
     */
    public function testListDatas()
    {
        $this->object->listDatas();
    }

    /**
     * @covers PHPExiftool\InformationDumper::listDatas
     * @covers InvalidArgumentException
     */
    public function testListDatasInvalidType()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->object->listDatas('Scrooge');
    }

    /**
     * @covers PHPExiftool\InformationDumper::listDatas
     * @covers DirectoryNotFoundException
     */
    public function testBadDirectory()
    {
        $this->markTestIncomplete(
            'DirectoryNotFoundException cannot be forced because directory is created.'
        );

        $this->expectException(DirectoryNotFoundException::class);

        $logger = new Logger('Tests');
        $logger->pushHandler(new NullHandler());
        new InformationDumper(new Exiftool($logger), "./unknownDir/foo", "PHPExiftool\\Driver");
    }
}
