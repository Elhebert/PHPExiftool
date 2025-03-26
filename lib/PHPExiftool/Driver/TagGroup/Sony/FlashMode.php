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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 347120
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FlashMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 349686
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FlashMode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 350574
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashMode',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360440
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashMode',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362180
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:FlashMode',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363178
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:FlashMode',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364201
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:FlashMode',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365202
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:FlashMode',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366186
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:FlashMode',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369193
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:FlashMode',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370223
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:FlashMode',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373224
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:FlashMode',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376225
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:FlashMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
