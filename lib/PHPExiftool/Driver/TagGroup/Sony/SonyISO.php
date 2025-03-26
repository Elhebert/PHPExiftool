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
class SonyISO extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyISO';

    protected string $name = 'SonyISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sony ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253302
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253973
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254621
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255289
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255292
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255304
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257928
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258593
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261217
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263841
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273683
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag9416
             * line : 276769
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:SonyISO',
            'desc' => [
                'en' => 'Sony ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
