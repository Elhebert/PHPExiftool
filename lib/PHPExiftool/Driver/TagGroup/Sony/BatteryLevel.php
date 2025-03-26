<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryLevel extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryLevel';

    protected string $name = 'BatteryLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243620
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:BatteryLevel',
            'desc' => [
                'en' => 'Battery Level',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo
             * line : 246028
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo.Sony:BatteryLevel',
            'desc' => [
                'en' => 'Battery Level',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::ExtraInfo2
             * line : 246038
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo2.Sony:BatteryLevel',
            'desc' => [
                'en' => 'Battery Level',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246062
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:BatteryLevel',
            'desc' => [
                'en' => 'Battery Level',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9406
             * line : 276018
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9406.Sony:BatteryLevel',
            'desc' => [
                'en' => 'Battery Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
