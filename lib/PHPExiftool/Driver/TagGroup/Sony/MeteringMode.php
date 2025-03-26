<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MeteringMode extends AbstractTagGroup
{
    protected string $id = 'Sony:MeteringMode';

    protected string $name = 'MeteringMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Metering Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243193
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243900
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244517
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251028
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252513
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253175
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253846
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254494
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255162
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257792
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258457
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261081
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263705
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MeteringMode',
            'desc' => [
                'en' => 'Metering Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
