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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 59393
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 59671
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 60098
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60449
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60460
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 60971
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 61646
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 61979
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData8
             * line : 62290
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData9
             * line : 62871
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsUnknown11',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2084;
}
