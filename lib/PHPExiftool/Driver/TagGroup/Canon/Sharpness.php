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
        'en' => 'Sharpness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 5960
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1D
             * line : 6060
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1D.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9720
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13080
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 43901
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::LogInfo
             * line : 48832
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Canon::LogInfo.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::Processing
             * line : 52386
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:Sharpness',
            'desc' => [
                'en' => 'Sharpness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
