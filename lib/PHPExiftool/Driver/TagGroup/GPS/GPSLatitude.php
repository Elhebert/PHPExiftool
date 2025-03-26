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
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90839
             * type : rational64u
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98211
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137060
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209757
             * type : rational64u
             * writable : false
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
