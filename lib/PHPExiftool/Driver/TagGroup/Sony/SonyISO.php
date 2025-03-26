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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363896
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:SonyISO',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364919
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:SonyISO',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365885
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:SonyISO',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366904
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366907
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366948
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:SonyISO',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369949
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:SonyISO',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370979
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:SonyISO',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373980
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:SonyISO',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376981
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:SonyISO',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387575
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:SonyISO',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391034
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:SonyISO',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
