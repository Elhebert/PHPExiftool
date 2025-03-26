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
class WB_RGGBLevelsUnknown extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown';

    protected string $name = 'WB_RGGBLevelsUnknown';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45880
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46022
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46239
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46497
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46729
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47134
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47317
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47551
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47839
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
