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
class FocusPointWrap extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FocusPointWrap';

    protected string $name = 'FocusPointWrap';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Point Wrap',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142436
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144055
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146025
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148057
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 150996
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151408
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152467
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154332
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155857
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157796
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158597
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FocusPointWrap',
            'desc' => [
                'en' => 'Focus Point Wrap',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
