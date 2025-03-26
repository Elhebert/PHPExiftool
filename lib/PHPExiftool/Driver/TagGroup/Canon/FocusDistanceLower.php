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
class FocusDistanceLower extends AbstractTagGroup
{
    protected string $id = 'Canon:FocusDistanceLower';

    protected string $name = 'FocusDistanceLower';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Distance Lower',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2864
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6330
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9773
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13186
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14818
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16453
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18093
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19847
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21598
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26797
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28520
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30246
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31946
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33484
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35179
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36865
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38403
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40126
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41784
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::FileInfo
             * line : 48436
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FileInfo.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::ShotInfo
             * line : 52832
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ShotInfo.Canon:FocusDistanceLower',
            'desc' => [
                'en' => 'Focus Distance Lower',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
