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
class WB_RGGBLevelsFlash extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsFlash';

    protected string $name = 'WB_RGGBLevelsFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorBalance
             * line : 45745
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorBalance.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45922
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46064
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46188
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46335
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46635
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46777
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46960
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47200
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47413
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47653
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47935
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsFlash',
            'desc' => [
                'en' => 'WB RGGB Levels Flash',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
