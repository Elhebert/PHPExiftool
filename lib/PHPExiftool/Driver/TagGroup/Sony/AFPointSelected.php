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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 345027
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 345577
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 345968
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 346195
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Main
             * line : 354620
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Main
             * line : 354760
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Main
             * line : 355018
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Main
             * line : 355276
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Main
             * line : 355317
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFPointSelected',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
