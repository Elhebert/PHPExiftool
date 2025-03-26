<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Kodak:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 106010
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Free
             * line : 106055
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::MOV
             * line : 108639
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::MOV.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::Main
             * line : 108732
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109117
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 109309
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        6 => [
            /**
             * table_name : Kodak::Type10
             * line : 109522
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type10.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        7 => [
            /**
             * table_name : Kodak::Type3
             * line : 109628
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type3.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        8 => [
            /**
             * table_name : Kodak::Type5
             * line : 109648
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        9 => [
            /**
             * table_name : Kodak::Type6
             * line : 109720
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type6.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        10 => [
            /**
             * table_name : Kodak::Type9
             * line : 109766
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
