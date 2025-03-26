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
class BatteryVoltage1 extends AbstractTagGroup
{
    protected string $id = 'Sony:BatteryVoltage1';

    protected string $name = 'BatteryVoltage1';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Voltage 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246065
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:BatteryVoltage1',
            'desc' => [
                'en' => 'Battery Voltage 1',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
