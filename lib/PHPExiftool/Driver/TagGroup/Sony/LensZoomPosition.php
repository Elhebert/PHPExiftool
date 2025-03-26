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
class LensZoomPosition extends AbstractTagGroup
{
    protected string $id = 'Sony:LensZoomPosition';

    protected string $name = 'LensZoomPosition';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9404a
             * line : 385072
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404a.Sony:LensZoomPosition',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9404b
             * line : 385326
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404b.Sony:LensZoomPosition',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390205
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390212
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 390219
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:LensZoomPosition',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
