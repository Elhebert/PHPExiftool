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
        'en' => 'Stops Above Base ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252231
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252893
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253564
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254229
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254880
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257510
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258175
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260799
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263423
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273689
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9416
             * line : 276772
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:StopsAboveBaseISO',
            'desc' => [
                'en' => 'Stops Above Base ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
