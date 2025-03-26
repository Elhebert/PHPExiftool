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
class AutoBracketSet extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AutoBracketSet';

    protected string $name = 'AutoBracketSet';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Bracket Set',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143702
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143719
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144363
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150025
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150355
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150713
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151978
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152763
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153548
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158025
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:AutoBracketSet',
            'desc' => [
                'en' => 'Auto Bracket Set',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
