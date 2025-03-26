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
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Canon:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1000D
             * line : 4428
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1000D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DX
             * line : 7971
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DX.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkIII
             * line : 11414
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIII.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIV
             * line : 14750
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIV.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraInfo40D
             * line : 16382
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo40D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::CameraInfo450D
             * line : 18011
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo450D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::CameraInfo500D
             * line : 19768
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo500D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::CameraInfo50D
             * line : 21522
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo50D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::CameraInfo550D
             * line : 23239
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo550D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::CameraInfo5DmkII
             * line : 28472
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkII.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::CameraInfo5DmkIII
             * line : 30164
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5DmkIII.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::CameraInfo600D
             * line : 31887
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo600D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::CameraInfo60D
             * line : 33439
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo60D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35125
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        14 => [
            /**
             * table_name : Canon::CameraInfo650D
             * line : 35128
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo650D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        15 => [
            /**
             * table_name : Canon::CameraInfo6D
             * line : 36820
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo6D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        16 => [
            /**
             * table_name : Canon::CameraInfo70D
             * line : 38358
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo70D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        17 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 40044
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        18 => [
            /**
             * table_name : Canon::CameraInfo750D
             * line : 40047
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo750D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        19 => [
            /**
             * table_name : Canon::CameraInfo7D
             * line : 41739
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo7D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        20 => [
            /**
             * table_name : Canon::CameraInfo80D
             * line : 43277
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo80D.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        21 => [
            /**
             * table_name : Canon::CameraInfoUnknown
             * line : 43346
             * type : string
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Canon::CameraInfoUnknown.Canon:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
