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
class StopsAboveBaseISO extends AbstractTagGroup
{
    protected string $id = 'Sony:StopsAboveBaseISO';

    protected string $name = 'StopsAboveBaseISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362215
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363213
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364236
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365237
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366221
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369228
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370258
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373259
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376260
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387584
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391037
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:StopsAboveBaseISO',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
