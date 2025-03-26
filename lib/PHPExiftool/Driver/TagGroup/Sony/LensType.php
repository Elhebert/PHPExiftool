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
class LensType extends AbstractTagGroup
{
    protected string $id = 'Sony:LensType';

    protected string $name = 'LensType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248915
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255946
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 259235
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261859
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 264483
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 266754
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 269089
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 272372
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 274671
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9416
             * line : 277547
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
