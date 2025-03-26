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
class LensType extends AbstractTagGroup
{
    protected string $id = 'Canon:LensType';

    protected string $name = 'LensType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 2941
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 4450
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 6484
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 7990
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 9927
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 11442
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 13263
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 14895
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 16530
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 18281
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 20035
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 21752
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 23261
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 24975
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 26985
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 28674
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 30400
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 31952
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 33638
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 35333
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 36871
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 38557
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        22 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 40252
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        23 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 41790
             * type : int16uRev
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
        24 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 44029
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:LensType',
            'desc' => [
                'en' => 'Lens Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
