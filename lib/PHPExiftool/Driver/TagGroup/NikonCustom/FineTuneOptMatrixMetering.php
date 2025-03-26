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
class FineTuneOptMatrixMetering extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FineTuneOptMatrixMetering';

    protected string $name = 'FineTuneOptMatrixMetering';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fine Tune Opt Matrix Metering',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142745
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144278
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146198
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148230
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151088
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151569
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154611
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156030
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158002
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158694
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FineTuneOptMatrixMetering',
            'desc' => [
                'en' => 'Fine Tune Opt Matrix Metering',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
