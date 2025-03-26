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
class MakerNoteKodak3 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteKodak3';

    protected string $name = 'MakerNoteKodak3';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Kodak 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77798
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteKodak3',
            'desc' => [
                'en' => 'Maker Note Kodak 3',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83091
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteKodak3',
            'desc' => [
                'en' => 'Maker Note Kodak 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
