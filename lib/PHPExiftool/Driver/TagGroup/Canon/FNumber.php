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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Canon:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4483
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 9114
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 13530
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 17832
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FNumber',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 19886
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FNumber',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 21920
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FNumber',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 23945
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FNumber',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26247
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FNumber',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 28546
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FNumber',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 30737
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FNumber',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 34948
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FNumber',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 37254
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FNumber',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39408
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FNumber',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 41599
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FNumber',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 43352
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FNumber',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 45510
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FNumber',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 47645
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FNumber',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 49345
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FNumber',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51481
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FNumber',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 53634
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FNumber',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 55350
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:FNumber',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 55439
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:FNumber',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Canon::ExposureInfo
             * line : 63217
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ExposureInfo.Canon:FNumber',
            'desc' => [
            ],
        ],
        23 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 70730
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:FNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
