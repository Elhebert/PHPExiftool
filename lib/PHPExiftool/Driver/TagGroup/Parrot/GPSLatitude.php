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
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'Parrot:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195940
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196020
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196139
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
