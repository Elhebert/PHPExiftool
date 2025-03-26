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
        'en' => 'Brightness Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251425
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252234
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 252896
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253567
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254232
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 254883
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257513
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258178
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 260802
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263426
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:BrightnessValue',
            'desc' => [
                'en' => 'Brightness Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
