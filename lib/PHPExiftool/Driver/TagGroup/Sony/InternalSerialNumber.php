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
        'en' => 'Internal Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 266112
             * type : int8u
             * writable : false
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 266115
             * type : int8u
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268450
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270681
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270684
             * type : int8u
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:InternalSerialNumber',
            'desc' => [
                'en' => 'Internal Serial Number',
            ],
        ],
    ];

    protected int $flags = 2052;
}
