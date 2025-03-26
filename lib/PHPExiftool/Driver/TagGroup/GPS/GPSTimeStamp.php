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
class GPSTimeStamp extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSTimeStamp';

    protected string $name = 'GPSTimeStamp';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 131928
             * type : rational64u
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSTimeStamp',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 141536
             * type : rational32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSTimeStamp',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 202987
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSTimeStamp',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 301313
             * type : rational64u
             * writable : false
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSTimeStamp',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
