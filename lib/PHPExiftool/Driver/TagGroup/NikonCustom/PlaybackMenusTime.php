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
class PlaybackMenusTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:PlaybackMenusTime';

    protected string $name = 'PlaybackMenusTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Playback Menus Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150187
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:PlaybackMenusTime',
            'desc' => [
                'en' => 'Playback Menus Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150540
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:PlaybackMenusTime',
            'desc' => [
                'en' => 'Playback Menus Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150902
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:PlaybackMenusTime',
            'desc' => [
                'en' => 'Playback Menus Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
