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
class FuncButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FuncButton';

    protected string $name = 'FuncButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Func Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143066
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143165
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144411
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152090
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152794
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154736
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158056
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:FuncButton',
            'desc' => [
                'en' => 'Func Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
