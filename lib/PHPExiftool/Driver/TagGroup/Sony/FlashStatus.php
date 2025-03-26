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
        'en' => 'Flash Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251653
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashStatus',
            'desc' => [
                'en' => 'Flash Status',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251664
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FlashStatus',
            'desc' => [
                'en' => 'Flash Status',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9050a
             * line : 265923
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050a.Sony:FlashStatus',
            'desc' => [
                'en' => 'Flash Status',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9050b
             * line : 268107
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050b.Sony:FlashStatus',
            'desc' => [
                'en' => 'Flash Status',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9050c
             * line : 270489
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9050c.Sony:FlashStatus',
            'desc' => [
                'en' => 'Flash Status',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
