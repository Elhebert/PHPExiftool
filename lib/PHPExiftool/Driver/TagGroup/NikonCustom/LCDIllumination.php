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
class LCDIllumination extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LCDIllumination';

    protected string $name = 'LCDIllumination';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'LCD Illumination',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143519
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144113
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146072
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148104
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151761
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152629
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154457
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155904
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157944
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 161447
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:LCDIllumination',
            'desc' => [
                'en' => 'LCD Illumination',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
