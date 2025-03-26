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
class WB_RGGBLevelsUnknown11 extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown11';

    protected string $name = 'WB_RGGBLevelsUnknown11';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown 11',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45982
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46124
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46341
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46557
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46563
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46837
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47236
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47419
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47611
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47941
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 11',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
