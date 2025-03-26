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
class LensSpecFeatures extends AbstractTagGroup
{
    protected string $id = 'Sony:LensSpecFeatures';

    protected string $name = 'LensSpecFeatures';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 381271
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 381274
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383639
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383662
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383676
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383690
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 383704
             * type : undef
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:LensSpecFeatures',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
