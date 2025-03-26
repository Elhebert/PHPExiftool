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
class GPSLongitudeRef extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSLongitudeRef';

    protected string $name = 'GPSLongitudeRef';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Longitude Ref',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90842
             * type : string
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSLongitudeRef',
            'desc' => [
                'en' => 'GPS Longitude Ref',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98214
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSLongitudeRef',
            'desc' => [
                'en' => 'GPS Longitude Ref',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137063
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSLongitudeRef',
            'desc' => [
                'en' => 'GPS Longitude Ref',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209760
             * type : string
             * writable : false
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSLongitudeRef',
            'desc' => [
                'en' => 'GPS Longitude Ref',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
