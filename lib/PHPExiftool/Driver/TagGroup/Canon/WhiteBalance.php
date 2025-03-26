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
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2867
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 5963
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6063
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6333
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9488
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9776
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 12929
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13189
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14821
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16456
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18096
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19850
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21601
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24818
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26800
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28523
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30249
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33487
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35182
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38406
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40129
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::Processing
             * line : 52424
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52657
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
