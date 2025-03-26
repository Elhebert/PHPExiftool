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
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243167
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244300
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244809
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251266
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252208
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252870
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253541
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254206
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254857
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257487
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258152
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260776
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263400
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
