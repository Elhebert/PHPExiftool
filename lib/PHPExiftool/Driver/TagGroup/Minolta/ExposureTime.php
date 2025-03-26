<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Minolta:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121908
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122484
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122844
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 122957
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::MOV1
             * line : 124252
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV1.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        5 => [
            /**
             * table_name : Minolta::MOV2
             * line : 124274
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV2.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        6 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125943
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
