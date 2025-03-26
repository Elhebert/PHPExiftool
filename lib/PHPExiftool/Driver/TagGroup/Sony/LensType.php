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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 357037
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:LensType',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 367591
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:LensType',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 371622
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:LensType',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 374623
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:LensType',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 377624
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:LensType',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379940
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensType',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 382308
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensType',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 386250
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:LensType',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 388892
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensType',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391953
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:LensType',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
