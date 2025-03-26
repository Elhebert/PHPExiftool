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
class MakerNoteKodak10 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteKodak10';

    protected string $name = 'MakerNoteKodak10';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Kodak 10',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77828
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteKodak10',
            'desc' => [
                'en' => 'Maker Note Kodak 10',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83121
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteKodak10',
            'desc' => [
                'en' => 'Maker Note Kodak 10',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
