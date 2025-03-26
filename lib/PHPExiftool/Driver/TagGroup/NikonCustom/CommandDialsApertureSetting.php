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
class CommandDialsApertureSetting extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommandDialsApertureSetting';

    protected string $name = 'CommandDialsApertureSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 213658
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 215529
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 218151
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 220601
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 226084
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 227180
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 230658
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 232500
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:CommandDialsApertureSetting',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
