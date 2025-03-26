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
class Quality2 extends AbstractTagGroup
{
    protected string $id = 'Sony:Quality2';

    protected string $name = 'Quality2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Quality 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252499
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253161
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253832
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255148
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257778
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258443
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261067
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263691
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270837
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 271010
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271213
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271230
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:Quality2',
            'desc' => [
                'en' => 'Quality 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
