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
class LensType2 extends AbstractTagGroup
{
    protected string $id = 'Sony:LensType2';

    protected string $name = 'LensType2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 351455
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:LensType2',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366983
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:LensType2',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 371014
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:LensType2',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 374015
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:LensType2',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 377016
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:LensType2',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379332
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensType2',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381700
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensType2',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9405a
             * line : 385642
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405a.Sony:LensType2',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 388284
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensType2',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391345
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:LensType2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
