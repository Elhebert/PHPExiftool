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
class ExposureDelayMode extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ExposureDelayMode';

    protected string $name = 'ExposureDelayMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Delay Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142821
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144329
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146235
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148284
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150014
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150702
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151772
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152746
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153784
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154665
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156084
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
        12 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158014
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ExposureDelayMode',
            'desc' => [
                'en' => 'Exposure Delay Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
