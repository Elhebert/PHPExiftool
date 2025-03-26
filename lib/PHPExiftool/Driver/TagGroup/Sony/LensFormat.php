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
class LensFormat extends AbstractTagGroup
{
    protected string $id = 'Sony:LensFormat';

    protected string $name = 'LensFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366955
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:LensFormat',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370986
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:LensFormat',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373987
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:LensFormat',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376988
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:LensFormat',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379318
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensFormat',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381686
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensFormat',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 385614
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:LensFormat',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 388256
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensFormat',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391317
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:LensFormat',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
