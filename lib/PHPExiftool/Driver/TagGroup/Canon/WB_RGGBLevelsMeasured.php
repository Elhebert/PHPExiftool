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
class WB_RGGBLevelsMeasured extends AbstractTagGroup
{
    protected string $id = 'Canon:WB_RGGBLevelsMeasured';

    protected string $name = 'WB_RGGBLevelsMeasured';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Measured',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45874
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46016
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46233
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46491
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46918
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47128
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47311
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47545
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47833
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:WB_RGGBLevelsMeasured',
            'desc' => [
                'en' => 'WB RGGB Levels Measured',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
