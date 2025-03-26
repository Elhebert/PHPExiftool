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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362077
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 362908
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363075
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 363913
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364098
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 364932
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365099
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 365898
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366083
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 368926
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369090
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 369956
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370120
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 372957
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373121
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 375958
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376122
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379134
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379214
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381356
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381442
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381516
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381590
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        23 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383771
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        24 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383854
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        25 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 383954
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        26 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 384187
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        27 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 384414
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
        28 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387617
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ReleaseMode2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
