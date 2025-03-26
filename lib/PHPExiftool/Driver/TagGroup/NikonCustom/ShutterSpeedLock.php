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
class ShutterSpeedLock extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ShutterSpeedLock';

    protected string $name = 'ShutterSpeedLock';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shutter Speed Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144968
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146888
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148919
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155347
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156737
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160800
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ShutterSpeedLock',
            'desc' => [
                'en' => 'Shutter Speed Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
