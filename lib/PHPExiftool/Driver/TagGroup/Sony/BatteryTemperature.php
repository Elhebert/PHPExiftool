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
class BatteryTemperature extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryTemperature';

    protected string $name = 'BatteryTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo
             * line : 245999
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo.Sony:BatteryTemperature',
            'desc' => [
                'en' => 'Battery Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246059
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:BatteryTemperature',
            'desc' => [
                'en' => 'Battery Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9406
             * line : 276012
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9406.Sony:BatteryTemperature',
            'desc' => [
                'en' => 'Battery Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
