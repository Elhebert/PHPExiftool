<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSAltitude extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSAltitude';

    protected string $name = 'GPSAltitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Altitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 218965
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229314
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::camm5
             * line : 230266
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm5.QuickTime:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::camm6
             * line : 230296
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 230474
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
    ];

    protected int $count = 0;
}
