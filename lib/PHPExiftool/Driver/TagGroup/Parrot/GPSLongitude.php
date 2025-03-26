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
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'Parrot:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Longitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195943
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196023
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196142
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
    ];

    protected int $count = 0;
}
