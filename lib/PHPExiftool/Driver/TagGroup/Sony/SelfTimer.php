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
class SelfTimer extends AbstractTagGroup
{
    protected string $id = 'Sony:SelfTimer';

    protected string $name = 'SelfTimer';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362151
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363149
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364172
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365173
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366157
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369164
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370194
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373195
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:SelfTimer',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376196
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:SelfTimer',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
