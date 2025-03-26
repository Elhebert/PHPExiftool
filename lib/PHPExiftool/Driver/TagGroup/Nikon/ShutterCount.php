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
class ShutterCount extends AbstractTagGroup
{
    protected string $id = 'Nikon:ShutterCount';

    protected string $name = 'ShutterCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shutter Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 134568
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,unsafe
             */
            'id' => 'Nikon::Main.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137286
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138016
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138050
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 138067
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 138083
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD300a
             * line : 138096
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300a.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138240
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 138529
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 138545
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 138558
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        11 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138631
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        12 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138634
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        13 => [
            /**
             * table_name : Nikon::ShotInfoD40
             * line : 138700
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD40.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        14 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 140003
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        15 => [
            /**
             * table_name : Nikon::ShotInfoD5100
             * line : 140016
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5100.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        16 => [
            /**
             * table_name : Nikon::ShotInfoD5200
             * line : 140029
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5200.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        17 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 140364
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        18 => [
            /**
             * table_name : Nikon::ShotInfoD7000
             * line : 140377
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD7000.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        19 => [
            /**
             * table_name : Nikon::ShotInfoD80
             * line : 140387
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD80.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        20 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 140500
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
        21 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 141136
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:ShutterCount',
            'desc' => [
                'en' => 'Shutter Count',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
