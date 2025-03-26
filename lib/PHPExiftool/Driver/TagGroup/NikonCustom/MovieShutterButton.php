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
class MovieShutterButton extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:MovieShutterButton';

    protected string $name = 'MovieShutterButton';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie Shutter Button',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144990
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:MovieShutterButton',
            'desc' => [
                'en' => 'Movie Shutter Button',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146910
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:MovieShutterButton',
            'desc' => [
                'en' => 'Movie Shutter Button',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148941
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:MovieShutterButton',
            'desc' => [
                'en' => 'Movie Shutter Button',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:MovieShutterButton',
            'desc' => [
                'en' => 'Movie Shutter Button',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156759
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:MovieShutterButton',
            'desc' => [
                'en' => 'Movie Shutter Button',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
