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
class GPSLatitudeRef extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSLatitudeRef';

    protected string $name = 'GPSLatitudeRef';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Latitude Ref',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90828
             * type : string
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSLatitudeRef',
            'desc' => [
                'en' => 'GPS Latitude Ref',
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 98200
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSLatitudeRef',
            'desc' => [
                'en' => 'GPS Latitude Ref',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137049
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSLatitudeRef',
            'desc' => [
                'en' => 'GPS Latitude Ref',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209746
             * type : string
             * writable : false
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSLatitudeRef',
            'desc' => [
                'en' => 'GPS Latitude Ref',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
