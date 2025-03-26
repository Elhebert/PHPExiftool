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
class CommandDialsReverseRotation extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommandDialsReverseRotation';

    protected string $name = 'CommandDialsReverseRotation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Command Dials Reverse Rotation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144185
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146105
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148137
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150099
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152964
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154518
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155937
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158131
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:CommandDialsReverseRotation',
            'desc' => [
                'en' => 'Command Dials Reverse Rotation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
