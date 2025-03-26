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
class ISO extends AbstractTagGroup
{
    protected string $id = 'Canon:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2815
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6304
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9731
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9744
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13107
             * type : string
             * writable : true
             * count : 5
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13123
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14769
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16404
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18036
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19790
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21541
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 23258
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26737
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28494
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30189
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31906
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33458
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35153
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36839
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38377
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40063
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41758
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfoPowerShot
             * line : 43290
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfoPowerShot2
             * line : 43312
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoPowerShot2.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::ExposureInfo
             * line : 48149
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ExposureInfo.Canon:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 5;

    protected int $flags = 2052;
}
