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
class WB_RGGBLevelsCloudy extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsCloudy';

    protected string $name = 'WB_RGGBLevelsCloudy';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Cloudy',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45736
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45898
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46040
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46170
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46311
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46611
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46753
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46936
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47176
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47389
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47629
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47911
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsCloudy',
            'desc' => [
                'en' => 'WB RGGB Levels Cloudy',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
