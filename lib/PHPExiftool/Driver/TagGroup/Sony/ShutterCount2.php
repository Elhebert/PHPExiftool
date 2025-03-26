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
class ShutterCount2 extends AbstractTagGroup
{
    protected string $id = 'Sony:ShutterCount2';

    protected string $name = 'ShutterCount2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379208
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount2',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381430
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381433
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381436
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383845
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ShutterCount2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
