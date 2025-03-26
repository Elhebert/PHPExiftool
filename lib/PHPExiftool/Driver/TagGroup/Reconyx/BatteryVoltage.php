<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryVoltage extends AbstractTagGroup
{
    protected string $id = 'Reconyx:BatteryVoltage';

    protected string $name = 'BatteryVoltage';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Battery Voltage',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232709
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:BatteryVoltage',
            'desc' => [
                'en' => 'Battery Voltage',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232826
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:BatteryVoltage',
            'desc' => [
                'en' => 'Battery Voltage',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232967
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:BatteryVoltage',
            'desc' => [
                'en' => 'Battery Voltage',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
