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
class FineTuneOptSpotMetering extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FineTuneOptSpotMetering';

    protected string $name = 'FineTuneOptSpotMetering';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fine Tune Opt Spot Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142748
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144284
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146204
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148236
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151094
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151572
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154617
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156036
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158008
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158700
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FineTuneOptSpotMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Spot Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
