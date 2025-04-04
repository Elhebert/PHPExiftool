<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WifiRSSI extends AbstractTagGroup
{
    protected string $id = 'Parrot:WifiRSSI';

    protected string $name = 'WifiRSSI';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Wifi RSSI',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195934
             * type : int8s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:WifiRSSI',
            'desc' => [
                'en' => 'Wifi RSSI',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196123
             * type : int8s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:WifiRSSI',
            'desc' => [
                'en' => 'Wifi RSSI',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196193
             * type : int8s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:WifiRSSI',
            'desc' => [
                'en' => 'Wifi RSSI',
            ],
        ],
    ];

    protected int $count = 0;
}
