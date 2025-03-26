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
class NoMemoryCard extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:NoMemoryCard';

    protected string $name = 'NoMemoryCard';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'No Memory Card',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143806
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144077
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145648
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149948
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150278
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150614
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152385
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152568
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153427
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154404
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157897
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:NoMemoryCard',
            'desc' => [
                'en' => 'No Memory Card',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
