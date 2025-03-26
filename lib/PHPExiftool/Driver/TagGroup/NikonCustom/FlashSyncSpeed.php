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
class FlashSyncSpeed extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FlashSyncSpeed';

    protected string $name = 'FlashSyncSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Sync Speed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143600
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143629
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144853
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146770
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148801
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151850
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153217
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154048
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155209
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156619
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159000
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FlashSyncSpeed',
            'desc' => [
                'en' => 'Flash Sync Speed',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
