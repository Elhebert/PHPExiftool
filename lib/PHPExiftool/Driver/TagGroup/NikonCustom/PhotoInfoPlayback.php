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
class PhotoInfoPlayback extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:PhotoInfoPlayback';

    protected string $name = 'PhotoInfoPlayback';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Photo Info Playback',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143530
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:PhotoInfoPlayback',
            'desc' => [
                'en' => 'Photo Info Playback',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152374
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:PhotoInfoPlayback',
            'desc' => [
                'en' => 'Photo Info Playback',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
