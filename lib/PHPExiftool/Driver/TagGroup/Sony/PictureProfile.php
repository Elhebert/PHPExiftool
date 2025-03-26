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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362346
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362423
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363421
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364367
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364444
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365350
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365427
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366352
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369359
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369436
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370389
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370466
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373390
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373467
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376391
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376468
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:PictureProfile',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9416
             * line : 393266
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:PictureProfile',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
