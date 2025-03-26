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
class FlashShutterSpeed extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FlashShutterSpeed';

    protected string $name = 'FlashShutterSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Shutter Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143661
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144882
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146799
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148830
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151882
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153249
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153823
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154080
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155241
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156648
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158314
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159037
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FlashShutterSpeed',
            'desc' => [
                'en' => 'Flash Shutter Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
