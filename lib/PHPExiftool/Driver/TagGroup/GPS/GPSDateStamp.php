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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 132649
             * type : string
             * writable : true
             * count : 11
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSDateStamp',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 141929
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSDateStamp',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 203105
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSDateStamp',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 301476
             * type : string
             * writable : false
             * count : 11
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSDateStamp',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 11;

    protected int $flags = 2048;
}
