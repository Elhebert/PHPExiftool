<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:ColorMode';

    protected string $name = 'ColorMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 122141
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123187
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::Main
             * line : 124388
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 124438
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125788
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ColorMode',
            'desc' => [
                'en' => 'Color Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
