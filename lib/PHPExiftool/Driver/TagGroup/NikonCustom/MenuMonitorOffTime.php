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
class MenuMonitorOffTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MenuMonitorOffTime';

    protected string $name = 'MenuMonitorOffTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Menu Monitor Off Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143915
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144807
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146724
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148755
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151243
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151661
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153171
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155163
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156573
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158268
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158792
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:MenuMonitorOffTime',
            'desc' => [
                'en' => 'Menu Monitor Off Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
