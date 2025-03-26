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
class SubSelector extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SubSelector';

    protected string $name = 'SubSelector';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sub Selector',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145345
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:SubSelector',
            'desc' => [
                'en' => 'Sub Selector',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147469
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SubSelector',
            'desc' => [
                'en' => 'Sub Selector',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149511
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SubSelector',
            'desc' => [
                'en' => 'Sub Selector',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157336
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SubSelector',
            'desc' => [
                'en' => 'Sub Selector',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:SubSelector',
            'desc' => [
                'en' => 'Sub Selector',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
