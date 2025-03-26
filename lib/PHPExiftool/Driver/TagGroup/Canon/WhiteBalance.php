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
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'Canon:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4659
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8129
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8508
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 9258
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 12814
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 13678
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 17242
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 18037
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 20062
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 22096
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 24144
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26446
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 28745
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 32440
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 35151
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 37398
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39607
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 43496
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 45654
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 49489
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51689
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Canon::Processing
             * line : 69567
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 70183
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:WhiteBalance',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
