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
class GripBatteryState extends AbstractTagGroup
{
    protected string $id = 'Pentax:GripBatteryState';

    protected string $name = 'GripBatteryState';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Grip Battery State',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196894
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::BatteryInfo.Pentax:GripBatteryState',
            'desc' => [
                'en' => 'Grip Battery State',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::BatteryInfo
             * line : 196911
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Pentax::BatteryInfo.Pentax:GripBatteryState',
            'desc' => [
                'en' => 'Grip Battery State',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
