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
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Sony:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 341574
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 342751
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 347057
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 348666
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 350627
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Main
             * line : 358980
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Main
             * line : 359028
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9402
             * line : 384746
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9402.Sony:AFAreaMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
