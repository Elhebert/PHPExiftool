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
class MinFocalLength extends AbstractTagGroup
{
    protected string $id = 'Canon:MinFocalLength';

    protected string $name = 'MinFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Min Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4422
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 5931
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 7965
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9471
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11408
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 12923
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 14744
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16376
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 19762
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 21516
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 23233
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24969
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 28466
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 30155
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 31881
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 33433
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35119
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 36814
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 38352
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 40038
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 41733
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 43271
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 45513
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:MinFocalLength',
            'desc' => [
                'en' => 'Min Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
