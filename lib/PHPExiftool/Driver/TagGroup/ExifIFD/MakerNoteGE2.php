<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MakerNoteGE2 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteGE2';

    protected string $name = 'MakerNoteGE2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note GE2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77762
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteGE2',
            'desc' => [
                'en' => 'Maker Note GE2',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83055
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteGE2',
            'desc' => [
                'en' => 'Maker Note GE2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
