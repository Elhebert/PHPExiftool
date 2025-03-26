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
        'en' => 'Dynamic Range Optimizer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248854
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Main
             * line : 250659
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252237
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252727
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252899
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253398
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253570
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254063
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254235
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254714
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254886
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257516
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258009
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258181
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260633
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260805
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263257
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:DynamicRangeOptimizer',
            'desc' => [
                'en' => 'Dynamic Range Optimizer',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
