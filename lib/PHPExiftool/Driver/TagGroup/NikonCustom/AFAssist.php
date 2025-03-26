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
class AFAssist extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFAssist';

    protected string $name = 'AFAssist';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Assist',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142495
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145637
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149901
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150253
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150589
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151021
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151433
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152492
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153416
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154357
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157771
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:AFAssist',
            'desc' => [
                'en' => 'AF Assist',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
