<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsAuto extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsAuto';

    protected string $name = 'WB_RGGBLevelsAuto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45727
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45868
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46010
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46152
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46227
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46485
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46723
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46912
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47122
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47305
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47539
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47827
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsAuto',
            'desc' => [
                'en' => 'WB RGGB Levels Auto',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
