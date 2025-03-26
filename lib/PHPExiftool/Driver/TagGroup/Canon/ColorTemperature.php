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
class ColorTemperature extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTemperature';

    protected string $name = 'ColorTemperature';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4951
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8470
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8943
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 9550
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 13106
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 13970
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 17534
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 18329
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 20354
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 22388
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 24436
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 26738
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 29037
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 32732
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 35443
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 37690
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 39899
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 41795
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 43788
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 45946
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 47789
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 49781
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 51981
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 53778
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        24 => [
            /**
             * table_name : Canon::Main
             * line : 65917
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
        25 => [
            /**
             * table_name : Canon::Processing
             * line : 69859
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:ColorTemperature',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
