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
class WB_RGGBLevelsUnknown5 extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown5';

    protected string $name = 'WB_RGGBLevelsUnknown5';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown 5',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45946
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46088
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46263
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46521
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46801
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47158
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47341
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47575
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47863
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown5',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 5',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
