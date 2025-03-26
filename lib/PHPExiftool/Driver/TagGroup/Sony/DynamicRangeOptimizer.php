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
class DynamicRangeOptimizer extends AbstractTagGroup
{
    protected string $id = 'Sony:DynamicRangeOptimizer';

    protected string $name = 'DynamicRangeOptimizer';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 356836
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Main
             * line : 359360
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362233
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 362985
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363231
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364008
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364254
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365009
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365255
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 365993
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366239
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369000
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369246
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370030
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370276
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373031
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373277
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376032
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376278
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
