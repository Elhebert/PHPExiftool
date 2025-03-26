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
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Canon:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2812
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 4444
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6301
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 7984
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9741
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 11436
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13120
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14766
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16401
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18033
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19787
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21538
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 23255
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26734
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28491
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30186
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31903
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33455
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35150
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36836
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38374
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40060
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41755
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 43296
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43318
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        25 => [
            /**
             * table_name : Canon::ExposureInfo
             * line : 48146
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ExposureInfo.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        26 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52838
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        27 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52841
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
