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
class AFPointIllumination extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFPointIllumination';

    protected string $name = 'AFPointIllumination';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Illumination',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142447
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142464
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145194
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147075
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149106
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151007
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151419
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152478
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155557
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156924
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157782
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:AFPointIllumination',
            'desc' => [
                'en' => 'AF Point Illumination',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
