<?php

/**
 * This file is part of the PHPExiftool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace lib\PHPExiftool\Test\Driver;

use PHPExiftool\Driver\TagGroupFactory;
use PHPExiftool\Driver\TagGroupInterface;
use PHPExiftool\Exception\TagUnknown;
use PHPExiftool\PHPExiftool;
use PHPUnit\Framework\TestCase;

class TagGroupFactoryTest extends TestCase
{
    protected TagGroupFactory $object;

    private PHPExiftool $PHPExiftool;

    protected function setUp(): void
    {
        $this->PHPExiftool = new PHPExiftool;
    }

    private function createTagGroup(string $tagName): TagGroupInterface
    {
        return $this->PHPExiftool->getFactory()->createTagGroup($tagName);
    }

    /**
     * @covers TagGroupFactory::GetFromRDFTagname
     * @covers TagGroupFactory::classnameFromTagname
     *
     * @throws TagUnknown
     */
    public function testGetFromRdfTagname(): void
    {
        $tag = TagGroupFactory::getFromRDFTagname('IPTC:SupplementalCategories');
        $this->assertInstanceOf(get_class($this->createTagGroup('IPTC:SupplementalCategories')), $tag);

        $tag = TagGroupFactory::getFromRDFTagname('XMP_exif:ApertureValue');
        $this->assertInstanceOf(get_class($this->createTagGroup('XMP_exif:ApertureValue')), $tag);

        $this->expectException(TagUnknown::class);
        TagGroupFactory::getFromRDFTagname('XMP_exif:NonExistingTag');
    }

    /**
     * @covers TagGroupFactory::GetFromRDFTagname
     * @covers TagUnknown
     *
     * @throws TagUnknown
     */
    public function testGetFromRdfTagnameFail(): void
    {
        $this->expectException(TagUnknown::class);
        TagGroupFactory::getFromRDFTagname('XMP_exif:NonExistingTag');
    }

    /**
     * @covers TagGroupFactory::HasFromRDFTagname
     */
    public function testHasFromRdfTagname(): void
    {
        $this->assertTrue(TagGroupFactory::hasFromRDFTagname('IPTC:SupplementalCategories'));
        $this->assertFalse(TagGroupFactory::hasFromRDFTagname('XMP_exif:NonExistingTag'));
    }
}
