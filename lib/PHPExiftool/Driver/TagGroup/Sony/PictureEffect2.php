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
class PictureEffect2 extends AbstractTagGroup
{
    protected string $id = 'Sony:PictureEffect2';

    protected string $name = 'PictureEffect2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362500
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363498
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364521
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365504
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366506
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369513
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370543
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373544
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376545
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387821
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:PictureEffect2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
