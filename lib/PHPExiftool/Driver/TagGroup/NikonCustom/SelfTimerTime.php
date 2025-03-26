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
class SelfTimerTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SelfTimerTime';

    protected string $name = 'SelfTimerTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Self Timer Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143563
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144721
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145784
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146638
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148669
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150147
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150477
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150842
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151157
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151586
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153088
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153622
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        12 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155077
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        13 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156487
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        14 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158202
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
        15 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158720
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:SelfTimerTime',
            'desc' => [
                'en' => 'Self Timer Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
