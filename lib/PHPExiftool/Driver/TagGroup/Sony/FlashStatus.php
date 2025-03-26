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
class FlashStatus extends AbstractTagGroup
{
    protected string $id = 'Sony:FlashStatus';

    protected string $name = 'FlashStatus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 361166
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashStatus',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 361183
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashStatus',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 379082
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:FlashStatus',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 381304
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:FlashStatus',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 383719
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:FlashStatus',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
