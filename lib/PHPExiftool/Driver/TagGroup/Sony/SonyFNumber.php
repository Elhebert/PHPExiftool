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
        'en' => 'Sony F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 265955
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:SonyFNumber',
            'desc' => [
                'en' => 'Sony F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268139
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:SonyFNumber',
            'desc' => [
                'en' => 'Sony F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270521
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
            'desc' => [
                'en' => 'Sony F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270604
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:SonyFNumber',
            'desc' => [
                'en' => 'Sony F Number',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273698
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:SonyFNumber',
            'desc' => [
                'en' => 'Sony F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
