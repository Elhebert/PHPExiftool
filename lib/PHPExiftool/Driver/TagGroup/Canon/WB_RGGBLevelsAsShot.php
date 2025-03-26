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
        'en' => 'WB RGGB Levels As Shot',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45862
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46004
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46146
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46221
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46479
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46735
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46906
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47116
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47299
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47533
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47821
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsAsShot',
            'desc' => [
                'en' => 'WB RGGB Levels As Shot',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
