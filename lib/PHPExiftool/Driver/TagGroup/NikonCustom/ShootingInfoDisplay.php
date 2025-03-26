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
class ShootingInfoDisplay extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ShootingInfoDisplay';

    protected string $name = 'ShootingInfoDisplay';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shooting Info Display',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142960
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144099
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151744
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152615
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154440
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157930
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ShootingInfoDisplay',
            'desc' => [
                'en' => 'Shooting Info Display',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
