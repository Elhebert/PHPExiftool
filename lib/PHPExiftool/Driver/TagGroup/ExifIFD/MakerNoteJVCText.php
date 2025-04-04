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
class MakerNoteJVCText extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteJVCText';

    protected string $name = 'MakerNoteJVCText';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note JVC Text',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77786
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteJVCText',
            'desc' => [
                'en' => 'Maker Note JVC Text',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83079
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteJVCText',
            'desc' => [
                'en' => 'Maker Note JVC Text',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
