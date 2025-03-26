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
class GridDisplay extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:GridDisplay';

    protected string $name = 'GridDisplay';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Grid Display',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142977
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144088
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146061
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148093
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149926
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151783
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152593
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153748
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155893
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157861
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:GridDisplay',
            'desc' => [
                'en' => 'Grid Display',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
