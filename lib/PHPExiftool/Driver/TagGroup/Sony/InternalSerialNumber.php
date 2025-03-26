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
class InternalSerialNumber extends AbstractTagGroup
{
    protected string $id = 'Sony:InternalSerialNumber';

    protected string $name = 'InternalSerialNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379288
             * type : int8u
             * writable : false
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:InternalSerialNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379296
             * type : int8u
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:InternalSerialNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381664
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:InternalSerialNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383928
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:InternalSerialNumber',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383936
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:InternalSerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 2052;
}
