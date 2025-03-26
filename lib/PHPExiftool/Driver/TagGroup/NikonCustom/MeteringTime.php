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
class MeteringTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MeteringTime';

    protected string $name = 'MeteringTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Metering Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143817
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145764
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150110
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150440
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151603
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153036
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153599
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158153
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:MeteringTime',
            'desc' => [
                'en' => 'Metering Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
