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
class WB_RGGBLevelsFluorescent extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsFluorescent';

    protected string $name = 'WB_RGGBLevelsFluorescent';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Fluorescent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45742
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45910
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46052
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46182
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46323
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46623
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46765
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46948
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47188
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47401
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47641
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47923
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsFluorescent',
            'desc' => [
                'en' => 'WB RGGB Levels Fluorescent',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
