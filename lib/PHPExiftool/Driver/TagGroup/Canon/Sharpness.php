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
class Sharpness extends AbstractTagGroup
{
    protected string $id = 'Canon:Sharpness';

    protected string $name = 'Sharpness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8111
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:Sharpness',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 8490
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:Sharpness',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 13455
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:Sharpness',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 17697
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:Sharpness',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 56618
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:Sharpness',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::LogInfo
             * line : 64433
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Canon::LogInfo.Canon:Sharpness',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::Processing
             * line : 69479
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:Sharpness',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
