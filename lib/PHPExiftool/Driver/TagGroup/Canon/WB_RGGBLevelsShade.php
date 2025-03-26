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
class WB_RGGBLevelsShade extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsShade';

    protected string $name = 'WB_RGGBLevelsShade';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Shade',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45733
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45892
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46034
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46164
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46305
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46605
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46747
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46930
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47170
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47383
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47623
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47905
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsShade',
            'desc' => [
                'en' => 'WB RGGB Levels Shade',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
