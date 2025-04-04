<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BodyBatteryVoltage3 extends AbstractTagGroup
{
    protected string $id = 'Pentax:BodyBatteryVoltage3';

    protected string $name = 'BodyBatteryVoltage3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Body Battery Voltage 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196938
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::BatteryInfo.Pentax:BodyBatteryVoltage3',
            'desc' => [
                'en' => 'Body Battery Voltage 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
