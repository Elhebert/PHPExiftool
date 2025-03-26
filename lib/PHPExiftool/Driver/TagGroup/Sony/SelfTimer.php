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
        'en' => 'Self Timer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252194
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252856
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253527
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254192
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254843
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257473
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258138
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260762
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263386
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:SelfTimer',
            'desc' => [
                'en' => 'Self Timer',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
