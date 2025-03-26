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
        $this->PHPExiftool = new PHPExiftool('/tmp');
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
    public function test_get_from_rdf_tagname(): void
    {
        $tag = TagGroupFactory::getFromRDFTagname('/tmp', 'IPTC:SupplementalCategories');
        $this->assertInstanceOf(get_class($this->createTagGroup('IPTC:SupplementalCategories')), $tag);

        $tag = TagGroupFactory::getFromRDFTagname('/tmp', 'XMP_exif:ApertureValue');
        $this->assertInstanceOf(get_class($this->createTagGroup('XMP_exif:ApertureValue')), $tag);

        $this->expectException(TagUnknown::class);
        TagGroupFactory::getFromRDFTagname('/tmp', 'XMP_exif:NonExistingTag');
    }

    /**
     * @covers TagGroupFactory::GetFromRDFTagname
     * @covers TagUnknown
     *
     * @throws TagUnknown
     */
    public function test_get_from_rdf_tagname_fail(): void
    {
        $this->expectException(TagUnknown::class);
        TagGroupFactory::getFromRDFTagname('/tmp', 'XMP_exif:NonExistingTag');
    }

    /**
     * @covers TagGroupFactory::HasFromRDFTagname
     */
    public function test_has_from_rdf_tagname(): void
    {
        $this->assertTrue(TagGroupFactory::hasFromRDFTagname('/tmp', 'IPTC:SupplementalCategories'));
        $this->assertFalse(TagGroupFactory::hasFromRDFTagname('/tmp', 'XMP_exif:NonExistingTag'));
    }
}
