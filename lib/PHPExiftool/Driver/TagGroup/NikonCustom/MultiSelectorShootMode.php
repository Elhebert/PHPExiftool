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
class MultiSelectorShootMode extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MultiSelectorShootMode';

    protected string $name = 'MultiSelectorShootMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Multi Selector Shoot Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142751
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144287
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146207
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148239
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152034
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154620
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156039
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160436
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:MultiSelectorShootMode',
            'desc' => [
                'en' => 'Multi Selector Shoot Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
