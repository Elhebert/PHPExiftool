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
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Longitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 218962
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::RVMI_gReV
             * line : 229133
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229326
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::camm5
             * line : 230263
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm5.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::camm6
             * line : 230293
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 230492
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
    ];

    protected int $count = 0;
}
