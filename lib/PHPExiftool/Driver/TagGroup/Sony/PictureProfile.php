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
class PictureProfile extends AbstractTagGroup
{
    protected string $id = 'Sony:PictureProfile';

    protected string $name = 'PictureProfile';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252298
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252375
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252960
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253037
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253631
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253708
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254293
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254370
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254947
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255024
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257577
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257654
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258242
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260866
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260943
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263490
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263567
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9416
             * line : 278848
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:PictureProfile',
            'desc' => [
                'en' => 'Picture Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
