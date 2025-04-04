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
class MakerNoteISL extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteISL';

    protected string $name = 'MakerNoteISL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note ISL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77780
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteISL',
            'desc' => [
                'en' => 'Maker Note ISL',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83073
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteISL',
            'desc' => [
                'en' => 'Maker Note ISL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
