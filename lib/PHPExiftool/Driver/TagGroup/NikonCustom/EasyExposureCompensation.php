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
class EasyExposureCompensation extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:EasyExposureCompensation';

    protected string $name = 'EasyExposureCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Easy Exposure Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144202
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146122
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148154
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151032
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151535
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152690
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154535
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155954
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158666
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:EasyExposureCompensation',
            'desc' => [
                'en' => 'Easy Exposure Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
