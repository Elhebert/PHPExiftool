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
class StripOffsets extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:StripOffsets';

    protected string $name = 'StripOffsets';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Strip Offsets',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81461
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:StripOffsets',
            'desc' => [
                'en' => 'Strip Offsets',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 81464
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:StripOffsets',
            'desc' => [
                'en' => 'Strip Offsets',
            ],
        ],
    ];

    protected int $count = 0;
}
