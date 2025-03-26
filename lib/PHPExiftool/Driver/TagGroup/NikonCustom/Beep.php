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
class Beep extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Beep';

    protected string $name = 'Beep';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Beep',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142946
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144135
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145626
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149912
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150264
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150600
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151730
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153405
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154490
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157850
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:Beep',
            'desc' => [
                'en' => 'Beep',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
