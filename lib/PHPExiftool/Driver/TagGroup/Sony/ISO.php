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
class ISO extends AbstractTagGroup
{
    protected string $id = 'Sony:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246605
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251431
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251457
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::rtmd
             * line : 279001
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Sony::rtmd.Sony:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
