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
class FileIndex extends AbstractTagGroup
{
    protected string $id = 'Canon:FileIndex';

    protected string $name = 'FileIndex';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4434
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 7974
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11417
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 14753
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16385
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 18020
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 19771
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 21525
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 23242
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26465
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 28475
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 30167
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 31890
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 33442
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35131
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35134
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 36823
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 38361
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 41742
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 43280
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FileIndex',
            'desc' => [
                'en' => 'File Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
