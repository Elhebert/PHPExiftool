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
class CameraTemperature extends AbstractTagGroup
{
    protected string $id = 'Canon:CameraTemperature';

    protected string $name = 'CameraTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2838
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6307
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9747
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13163
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14792
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16427
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18070
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19824
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21575
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24742
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26771
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28497
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30223
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31909
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33461
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35156
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36842
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38380
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40103
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41761
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 43302
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 43305
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43324
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43327
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43330
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        25 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43333
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        26 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43336
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        27 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43353
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        28 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43356
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        29 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43359
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        30 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43362
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        31 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43365
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        32 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 43368
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
        33 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52754
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:CameraTemperature',
            'desc' => [
                'en' => 'Camera Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
