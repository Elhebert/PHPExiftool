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
class ShotInfoVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:ShotInfoVersion';

    protected string $name = 'ShotInfoVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shot Info Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfo
             * line : 137985
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfo.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 138074
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300a
             * line : 138090
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300a.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138231
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 138503
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 138536
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 138552
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138608
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD4
             * line : 138687
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD40
             * line : 138697
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD40.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 138718
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        11 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139287
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        12 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 139994
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        13 => [
            /**
             * table_name : Nikon::ShotInfoD5100
             * line : 140010
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5100.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        14 => [
            /**
             * table_name : Nikon::ShotInfoD5200
             * line : 140023
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5200.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        15 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140036
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        16 => [
            /**
             * table_name : Nikon::ShotInfoD610
             * line : 140345
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD610.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        17 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 140355
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        18 => [
            /**
             * table_name : Nikon::ShotInfoD7000
             * line : 140371
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD7000.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        19 => [
            /**
             * table_name : Nikon::ShotInfoD80
             * line : 140384
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD80.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        20 => [
            /**
             * table_name : Nikon::ShotInfoD800
             * line : 140473
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD800.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        21 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 140507
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        22 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141051
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        23 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 141127
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        24 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141143
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
        25 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141210
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:ShotInfoVersion',
            'desc' => [
                'en' => 'Shot Info Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
