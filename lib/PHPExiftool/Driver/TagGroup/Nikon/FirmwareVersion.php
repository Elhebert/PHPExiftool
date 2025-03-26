<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MakerNotes0x51
             * line : 199643
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::MakerNotes0x51.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 205304
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 205514
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 205713
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 206014
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 206070
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 206193
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD4
             * line : 206315
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 206392
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 207022
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 207788
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Nikon::ShotInfoD5100
             * line : 207827
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5100.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Nikon::ShotInfoD5200
             * line : 207861
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5200.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 207895
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Nikon::ShotInfoD610
             * line : 208255
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD610.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 208278
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Nikon::ShotInfoD7000
             * line : 208317
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD7000.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 208538
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 208602
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 209162
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 209254
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 209293
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 209376
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:FirmwareVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
