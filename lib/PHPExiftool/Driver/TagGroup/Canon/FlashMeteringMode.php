<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashMeteringMode extends AbstractTagGroup
{
    protected string $id = 'Canon:FlashMeteringMode';

    protected string $name = 'FlashMeteringMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4534
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 17916
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 19937
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 21971
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 24023
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26325
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 28624
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 35026
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39486
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51568
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FlashMeteringMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
