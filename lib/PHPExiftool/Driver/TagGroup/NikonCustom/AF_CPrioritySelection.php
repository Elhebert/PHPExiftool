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
class AF_CPrioritySelection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AF-CPrioritySelection';

    protected string $name = 'AF-CPrioritySelection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF-C Priority Selection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142355
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 143982
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 145972
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148004
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150242
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150567
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 150940
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152411
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154262
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155787
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158461
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:AF-CPrioritySelection',
            'desc' => [
                'en' => 'AF-C Priority Selection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
