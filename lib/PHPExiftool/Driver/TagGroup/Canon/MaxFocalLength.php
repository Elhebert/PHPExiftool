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
class MaxFocalLength extends AbstractTagGroup
{
    protected string $id = 'Canon:MaxFocalLength';

    protected string $name = 'MaxFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Max Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4425
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 5934
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 7968
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9474
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11411
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 12926
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 14747
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16379
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 19765
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 21519
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 23236
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24972
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 28469
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 30158
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 31884
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 33436
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35122
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 36817
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 38355
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 40041
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 41736
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 43274
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 45510
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:MaxFocalLength',
            'desc' => [
                'en' => 'Max Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
