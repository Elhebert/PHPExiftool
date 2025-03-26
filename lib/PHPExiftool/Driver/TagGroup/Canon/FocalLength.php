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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4577
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6535
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 9176
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FocalLength',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 11268
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:FocalLength',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 13596
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FocalLength',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 15715
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:FocalLength',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 17955
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FocalLength',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 19980
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 22014
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 24062
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26364
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 28663
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 32344
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 35069
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FocalLength',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 37316
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FocalLength',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39525
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 41661
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 43414
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 45572
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 47707
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 49407
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51607
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 53696
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FocalLength',
            'desc' => [
            ],
        ],
        23 => [
            /**
             * table_name : Canon::FocalInfo
             * line : 64043
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FocalInfo.Canon:FocalLength',
            'desc' => [
            ],
        ],
        24 => [
            /**
             * table_name : Canon::FocalLength
             * line : 64084
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::FocalLength.Canon:FocalLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
