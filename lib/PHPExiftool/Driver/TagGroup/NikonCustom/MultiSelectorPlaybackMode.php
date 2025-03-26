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
class MultiSelectorPlaybackMode extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MultiSelectorPlaybackMode';

    protected string $name = 'MultiSelectorPlaybackMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Multi Selector Playback Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142765
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142999
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144301
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148256
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152048
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154637
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156056
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160618
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:MultiSelectorPlaybackMode',
            'desc' => [
                'en' => 'Multi Selector Playback Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
