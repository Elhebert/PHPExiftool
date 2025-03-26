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
class BrightnessValue extends AbstractTagGroup
{
    protected string $id = 'Sony:BrightnessValue';

    protected string $name = 'BrightnessValue';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360763
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362218
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363216
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364239
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365240
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366224
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369231
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370261
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373262
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376263
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:BrightnessValue',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
