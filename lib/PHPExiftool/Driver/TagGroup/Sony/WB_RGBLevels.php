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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362891
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363889
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364912
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365878
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366897
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369904
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370934
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373935
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376936
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:WB_RGBLevels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
