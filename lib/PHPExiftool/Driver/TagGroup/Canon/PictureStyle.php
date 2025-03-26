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
class PictureStyle extends AbstractTagGroup
{
    protected string $id = 'Canon:PictureStyle';

    protected string $name = 'PictureStyle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Picture Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6134
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6214
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6407
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9627
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9850
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13003
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18170
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19924
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21675
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24892
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26874
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28597
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30323
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33561
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35256
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38480
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::Processing
             * line : 52498
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:PictureStyle',
            'desc' => [
                'en' => 'Picture Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
