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
class AFPointSelected extends AbstractTagGroup
{
    protected string $id = 'Sony:AFPointSelected';

    protected string $name = 'AFPointSelected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Selected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 241931
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242334
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242563
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242675
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Main
             * line : 247227
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Main
             * line : 247292
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Main
             * line : 247537
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Main
             * line : 247782
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Main
             * line : 247817
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
                'en' => 'AF Point Selected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
