<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CenterWeightedAreaSize extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CenterWeightedAreaSize';

    protected string $name = 'CenterWeightedAreaSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Center Weighted Area Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142702
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142722
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144258
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146178
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148210
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151068
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151549
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152726
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153770
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154591
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156010
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157988
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
        12 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158680
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:CenterWeightedAreaSize',
            'desc' => [
                'en' => 'Center Weighted Area Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
