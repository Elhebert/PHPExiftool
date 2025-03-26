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
        'en' => 'Color Temperature',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2938
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6057
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6211
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6404
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9559
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9847
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13000
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13260
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14892
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16527
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18167
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 19921
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21672
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24889
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26871
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28594
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30320
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31949
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33558
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35253
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36868
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38477
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40200
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41787
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::Main
             * line : 50071
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Main.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
        25 => [
            /**
             * table_name : Canon::Processing
             * line : 52495
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:ColorTemperature',
            'desc' => [
                'en' => 'Color Temperature',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
