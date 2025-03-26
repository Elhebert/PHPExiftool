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
class ShutterCount extends AbstractTagGroup
{
    protected string $id = 'Sony:ShutterCount';

    protected string $name = 'ShutterCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 353418
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:ShutterCount',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreInfo0201
             * line : 359768
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo0201.Sony:ShutterCount',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreInfo0201
             * line : 359779
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreInfo0201.Sony:ShutterCount',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379117
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381339
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383754
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ShutterCount',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
