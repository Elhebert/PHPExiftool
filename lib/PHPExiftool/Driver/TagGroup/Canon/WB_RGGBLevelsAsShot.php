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
class WB_RGGBLevelsAsShot extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsAsShot';

    protected string $name = 'WB_RGGBLevelsAsShot';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 59152
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 59430
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 59708
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 59857
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60307
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 60763
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 61086
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 61405
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 61738
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 62148
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 62630
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
