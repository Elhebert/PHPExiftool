<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Longitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90853
             * type : rational64u
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98225
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137074
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209771
             * type : rational64u
             * writable : false
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
