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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 6496
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 11232
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FileIndex',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 15652
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FileIndex',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 19868
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FileIndex',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 21893
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 23924
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 26226
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 28528
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 30719
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 34422
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 37233
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FileIndex',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 39383
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FileIndex',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 41581
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 43334
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 45480
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 45487
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 47628
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 49328
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 53617
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FileIndex',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 55317
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FileIndex',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
