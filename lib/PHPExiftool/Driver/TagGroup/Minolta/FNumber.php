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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Minolta:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121911
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122487
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122841
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 122960
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::MOV1
             * line : 124255
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV1.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        5 => [
            /**
             * table_name : Minolta::MOV2
             * line : 124277
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::MOV2.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        6 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126865
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
