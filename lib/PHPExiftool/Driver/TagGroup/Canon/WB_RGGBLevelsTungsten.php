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
class WB_RGGBLevelsTungsten extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsTungsten';

    protected string $name = 'WB_RGGBLevelsTungsten';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45739
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45904
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46046
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46176
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46317
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46617
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46759
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46942
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47182
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47395
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47635
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47917
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsTungsten',
            'desc' => [
                'en' => 'WB RGGB Levels Tungsten',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
