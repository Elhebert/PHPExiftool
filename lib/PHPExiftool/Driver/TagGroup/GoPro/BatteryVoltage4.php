<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BatteryVoltage4 extends AbstractTagGroup
{
    protected string $id = 'GoPro:BatteryVoltage4';

    protected string $name = 'BatteryVoltage4';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Battery Voltage 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::KBAT
             * line : 97883
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::KBAT.GoPro:BatteryVoltage4',
            'desc' => [
                'en' => 'Battery Voltage 4',
            ],
        ],
    ];

    protected int $count = 0;
}
