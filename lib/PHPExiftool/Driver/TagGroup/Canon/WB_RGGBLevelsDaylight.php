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
class WB_RGGBLevelsDaylight extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsDaylight';

    protected string $name = 'WB_RGGBLevelsDaylight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Daylight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45730
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45886
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46028
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46158
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46299
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46599
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46741
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46924
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47164
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47377
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47617
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47899
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
