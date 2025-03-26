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
class ReleaseMode2 extends AbstractTagGroup
{
    protected string $id = 'Sony:ReleaseMode2';

    protected string $name = 'ReleaseMode2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Release Mode 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252120
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252650
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252782
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253318
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253453
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 253986
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254118
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254634
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254769
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257270
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257399
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 257935
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258064
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260559
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263183
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263312
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 265958
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 266038
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        19 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268142
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        20 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268228
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        21 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268302
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        22 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268376
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        23 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270524
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        24 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270607
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        25 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270697
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        26 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 270870
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        27 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271037
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
        28 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273707
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ReleaseMode2',
            'desc' => [
                'en' => 'Release Mode 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
