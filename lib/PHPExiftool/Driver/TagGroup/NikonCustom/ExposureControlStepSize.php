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
class ExposureControlStepSize extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ExposureControlStepSize';

    protected string $name = 'ExposureControlStepSize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Control Step Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142660
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144216
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146136
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148168
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151507
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154549
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155968
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157977
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158652
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ExposureControlStepSize',
            'desc' => [
                'en' => 'Exposure Control Step Size',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
