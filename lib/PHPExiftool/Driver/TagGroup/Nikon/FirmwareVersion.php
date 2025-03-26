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
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MakerNotes0x51
             * line : 134677
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::MakerNotes0x51.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 137988
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 138077
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138234
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 138506
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 138539
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138611
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD4
             * line : 138690
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 138721
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139290
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 139997
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        11 => [
            /**
             * table_name : Nikon::ShotInfoD5100
             * line : 140013
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5100.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        12 => [
            /**
             * table_name : Nikon::ShotInfoD5200
             * line : 140026
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5200.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        13 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140039
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        14 => [
            /**
             * table_name : Nikon::ShotInfoD610
             * line : 140348
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD610.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        15 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 140358
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        16 => [
            /**
             * table_name : Nikon::ShotInfoD7000
             * line : 140374
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD7000.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        17 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 140476
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        18 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140510
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        19 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141054
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        20 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 141130
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        21 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141146
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        22 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141213
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $flags = 2052;
}
