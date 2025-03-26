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
class FineTuneOptCenterWeighted extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FineTuneOptCenterWeighted';

    protected string $name = 'FineTuneOptCenterWeighted';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Fine Tune Opt Center Weighted',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142742
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144281
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146201
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148233
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151091
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154614
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156033
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158005
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158697
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FineTuneOptCenterWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Center Weighted',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
