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
class AFPointSelection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFPointSelection';

    protected string $name = 'AFPointSelection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Selection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142380
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointSelection',
            'desc' => [
                'en' => 'AF Point Selection',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144010
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointSelection',
            'desc' => [
                'en' => 'AF Point Selection',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:AFPointSelection',
            'desc' => [
                'en' => 'AF Point Selection',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154287
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointSelection',
            'desc' => [
                'en' => 'AF Point Selection',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155815
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointSelection',
            'desc' => [
                'en' => 'AF Point Selection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
