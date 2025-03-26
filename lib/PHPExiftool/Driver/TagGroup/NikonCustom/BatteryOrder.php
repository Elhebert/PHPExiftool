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
class BatteryOrder extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:BatteryOrder';

    protected string $name = 'BatteryOrder';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Order',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142907
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:BatteryOrder',
            'desc' => [
                'en' => 'Battery Order',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151822
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:BatteryOrder',
            'desc' => [
                'en' => 'Battery Order',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152503
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:BatteryOrder',
            'desc' => [
                'en' => 'Battery Order',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154368
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:BatteryOrder',
            'desc' => [
                'en' => 'Battery Order',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
