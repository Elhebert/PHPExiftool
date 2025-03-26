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
class WB_RGGBLevelsUnknown3 extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsUnknown3';

    protected string $name = 'WB_RGGBLevelsUnknown3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Unknown 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45934
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46076
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46251
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46509
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46789
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47146
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47329
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47563
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47851
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown3',
            'desc' => [
                'en' => 'WB RGGB Levels Unknown 3',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
