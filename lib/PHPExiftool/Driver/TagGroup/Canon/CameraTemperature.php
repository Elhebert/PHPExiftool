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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4562
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 9165
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 13581
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 17944
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 19965
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 21999
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 24051
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26353
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 28652
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 32277
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 35054
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 37305
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39514
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 41650
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 43403
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 45561
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 47696
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 49396
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51596
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 53685
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 55397
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 55408
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55486
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55497
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        24 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55508
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        25 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55519
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        26 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55530
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        27 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55571
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        28 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55582
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        29 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55593
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        30 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55604
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        31 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55615
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        32 => [
            /**
             * table_name : Canon::CameraInfoUnknown32
             * line : 55626
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown32.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
        33 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 70540
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:CameraTemperature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
