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
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 218959
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::RVMI_gReV
             * line : 229130
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229323
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::camm5
             * line : 230260
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm5.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::camm6
             * line : 230290
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 230489
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
