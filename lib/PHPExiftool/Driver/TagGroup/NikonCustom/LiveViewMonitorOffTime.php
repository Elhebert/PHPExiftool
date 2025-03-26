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
class LiveViewMonitorOffTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LiveViewMonitorOffTime';

    protected string $name = 'LiveViewMonitorOffTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Live View Monitor Off Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144784
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146701
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148732
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150517
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150882
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151220
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153148
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155140
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156550
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:LiveViewMonitorOffTime',
            'desc' => [
                'en' => 'Live View Monitor Off Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
