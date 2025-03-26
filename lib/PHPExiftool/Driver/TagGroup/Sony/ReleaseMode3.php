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
class ReleaseMode3 extends AbstractTagGroup
{
    protected string $id = 'Sony:ReleaseMode3';

    protected string $name = 'ReleaseMode3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Release Mode 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252094
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252756
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253427
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254092
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254743
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257373
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258038
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260662
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263286
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ReleaseMode3',
            'desc' => [
                'en' => 'Release Mode 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
