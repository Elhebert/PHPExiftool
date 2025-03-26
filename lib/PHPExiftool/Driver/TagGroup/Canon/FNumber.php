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
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2809
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6298
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9738
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13117
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14763
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16398
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18030
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19784
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21535
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 23252
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26731
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28488
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30183
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31900
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33452
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35147
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36833
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38371
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40057
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41752
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 43293
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43315
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::ExposureInfo
             * line : 48143
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ExposureInfo.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52835
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
