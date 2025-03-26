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
class GPSAltitude extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSAltitude';

    protected string $name = 'GPSAltitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Altitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90867
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98239
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137088
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209785
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSAltitude',
            'desc' => [
                'en' => 'GPS Altitude',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
