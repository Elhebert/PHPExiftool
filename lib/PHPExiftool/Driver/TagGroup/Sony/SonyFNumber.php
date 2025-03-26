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
class SonyFNumber extends AbstractTagGroup
{
    protected string $id = 'Sony:SonyFNumber';

    protected string $name = 'SonyFNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379131
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:SonyFNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381353
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:SonyFNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383768
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383851
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387608
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:SonyFNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
