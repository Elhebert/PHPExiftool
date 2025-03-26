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
class HDRSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:HDRSetting';

    protected string $name = 'HDRSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'HDR Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244913
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251351
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252266
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252928
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253599
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254264
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254915
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257545
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258210
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260834
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263458
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:HDRSetting',
            'desc' => [
                'en' => 'HDR Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
