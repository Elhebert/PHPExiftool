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
class DirectoryIndex extends AbstractTagGroup
{
    protected string $id = 'Canon:DirectoryIndex';

    protected string $name = 'DirectoryIndex';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Directory Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4431
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 7977
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11423
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 14756
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16388
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 18017
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 19774
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 21528
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 23245
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26462
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 28478
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 30173
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 31893
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 33445
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35137
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35140
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 36826
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 38364
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 41745
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 43283
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:DirectoryIndex',
            'desc' => [
                'en' => 'Directory Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
