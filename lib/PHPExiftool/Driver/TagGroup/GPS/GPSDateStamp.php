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
class GPSDateStamp extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSDateStamp';

    protected string $name = 'GPSDateStamp';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Date Stamp',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 91014
             * type : string
             * writable : true
             * count : 11
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSDateStamp',
            'desc' => [
                'en' => 'GPS Date Stamp',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98318
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSDateStamp',
            'desc' => [
                'en' => 'GPS Date Stamp',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137114
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSDateStamp',
            'desc' => [
                'en' => 'GPS Date Stamp',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209819
             * type : string
             * writable : false
             * count : 11
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSDateStamp',
            'desc' => [
                'en' => 'GPS Date Stamp',
            ],
        ],
    ];

    protected int $count = 11;

    protected int $flags = 2048;
}
