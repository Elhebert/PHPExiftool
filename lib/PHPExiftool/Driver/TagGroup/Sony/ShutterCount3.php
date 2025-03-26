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
class ShutterCount3 extends AbstractTagGroup
{
    protected string $id = 'Sony:ShutterCount3';

    protected string $name = 'ShutterCount3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 381277
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 381280
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 381283
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383642
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383645
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383648
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount3',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
