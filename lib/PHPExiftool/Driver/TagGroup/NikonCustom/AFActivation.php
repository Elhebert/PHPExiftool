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
class AFActivation extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFActivation';

    protected string $name = 'AFActivation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 211946
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 214551
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 219373
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 221833
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 224512
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 229541
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 233757
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 235219
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:AFActivation',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
