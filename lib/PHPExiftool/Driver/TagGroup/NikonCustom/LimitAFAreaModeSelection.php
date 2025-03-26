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
class LimitAFAreaModeSelection extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:LimitAFAreaModeSelection';

    protected string $name = 'LimitAFAreaModeSelection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Limit AF Area Mode Selection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145481
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:LimitAFAreaModeSelection',
            'desc' => [
                'en' => 'Limit AF Area Mode Selection',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147139
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:LimitAFAreaModeSelection',
            'desc' => [
                'en' => 'Limit AF Area Mode Selection',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149181
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:LimitAFAreaModeSelection',
            'desc' => [
                'en' => 'Limit AF Area Mode Selection',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155629
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:LimitAFAreaModeSelection',
            'desc' => [
                'en' => 'Limit AF Area Mode Selection',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156988
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:LimitAFAreaModeSelection',
            'desc' => [
                'en' => 'Limit AF Area Mode Selection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
