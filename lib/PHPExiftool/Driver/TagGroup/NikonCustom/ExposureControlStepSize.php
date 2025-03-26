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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 212345
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 214880
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 217550
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 219974
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 224751
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 229963
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 231855
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 234369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 235365
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ExposureControlStepSize',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
