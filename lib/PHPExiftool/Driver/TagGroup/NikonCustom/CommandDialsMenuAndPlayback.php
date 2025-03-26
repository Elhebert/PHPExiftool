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
class CommandDialsMenuAndPlayback extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:CommandDialsMenuAndPlayback';

    protected string $name = 'CommandDialsMenuAndPlayback';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Command Dials Menu And Playback',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143508
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144645
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146570
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148601
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152352
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153000
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154998
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156419
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:CommandDialsMenuAndPlayback',
            'desc' => [
                'en' => 'Command Dials Menu And Playback',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
