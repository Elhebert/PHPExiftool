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
        'en' => 'Flash Metering Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2818
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13143
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14772
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16407
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18050
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19804
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21555
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26751
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30203
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40083
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FlashMeteringMode',
            'desc' => [
                'en' => 'Flash Metering Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
