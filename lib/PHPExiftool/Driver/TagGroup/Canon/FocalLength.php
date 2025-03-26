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
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Canon:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2844
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 4447
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6310
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 7987
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9753
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 11439
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13166
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14798
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16433
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18073
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19827
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21578
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24762
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26777
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28500
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30226
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31912
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33464
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35159
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36845
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38383
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40106
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41764
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::FocalInfo
             * line : 48656
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FocalInfo.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::FocalLength
             * line : 48674
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FocalLength.Canon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
