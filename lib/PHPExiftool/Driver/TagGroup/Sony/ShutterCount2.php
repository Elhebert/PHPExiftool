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
        'en' => 'Shutter Count 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 266032
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:ShutterCount2',
            'desc' => [
                'en' => 'Shutter Count 2',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268216
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
                'en' => 'Shutter Count 2',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268219
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
                'en' => 'Shutter Count 2',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268222
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:ShutterCount2',
            'desc' => [
                'en' => 'Shutter Count 2',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270598
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:ShutterCount2',
            'desc' => [
                'en' => 'Shutter Count 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
