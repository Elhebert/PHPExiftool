<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'Composite:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Longitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65245
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        1 => [
            /**
             * table_name : Composite
             * line : 67848
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        2 => [
            /**
             * table_name : Composite
             * line : 67851
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        3 => [
            /**
             * table_name : Composite
             * line : 67913
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
    ];

    protected int $count = 0;
}
