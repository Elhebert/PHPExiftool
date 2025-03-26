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
class AF_SPrioritySelection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AF-SPrioritySelection';

    protected string $name = 'AF-SPrioritySelection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF-S Priority Selection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 143999
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 145989
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148021
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 150951
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151358
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152422
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154276
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155804
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:AF-SPrioritySelection',
            'desc' => [
                'en' => 'AF-S Priority Selection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
