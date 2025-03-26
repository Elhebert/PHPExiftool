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
class ReverseIndicators extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ReverseIndicators';

    protected string $name = 'ReverseIndicators';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Reverse Indicators',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142852
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144152
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146094
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148126
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149992
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150322
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150680
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152363
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152679
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154507
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155926
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157966
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
        12 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160858
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ReverseIndicators',
            'desc' => [
                'en' => 'Reverse Indicators',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
