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
class CameraOrientation extends AbstractTagGroup
{
    protected string $id = 'Canon:CameraOrientation';

    protected string $name = 'CameraOrientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2847
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6313
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9756
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13169
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14801
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16436
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18076
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19830
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21581
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24748
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26780
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28503
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30229
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31915
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31929
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33467
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35162
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36848
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38386
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40109
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41767
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
