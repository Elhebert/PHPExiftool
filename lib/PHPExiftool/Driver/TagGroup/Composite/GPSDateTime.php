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
class GPSDateTime extends AbstractTagGroup
{
    protected string $id = 'Composite:GPSDateTime';

    protected string $name = 'GPSDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Date/Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65233
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date/Time',
            ],
        ],
        1 => [
            /**
             * table_name : Composite
             * line : 67796
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date/Time',
            ],
        ],
        2 => [
            /**
             * table_name : Composite
             * line : 67907
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date/Time',
            ],
        ],
    ];

    protected int $count = 0;
}
