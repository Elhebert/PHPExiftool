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
class WB_RGBLevels extends AbstractTagGroup
{
    protected string $id = 'Sony:WB_RGBLevels';

    protected string $name = 'WB_RGBLevels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGB Levels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252637
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253299
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253970
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254618
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255286
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257916
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258581
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261205
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263829
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:WB_RGBLevels',
            'desc' => [
                'en' => 'WB RGB Levels',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
