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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 347161
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 348729
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 350109
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360081
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362570
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363568
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364591
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365557
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366576
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369583
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370613
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373614
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:MeteringMode',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376615
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:MeteringMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
