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
class Saturation extends AbstractTagGroup
{
    protected string $id = 'Canon:Saturation';

    protected string $name = 'Saturation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo1DmkII
             * line : 9704
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkII.Canon:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::CameraInfo1DmkIIN
             * line : 13091
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo1DmkIIN.Canon:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::CameraSettings
             * line : 43893
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraSettings.Canon:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorInfo
             * line : 48078
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorInfo.Canon:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::LogInfo
             * line : 48835
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Canon::LogInfo.Canon:Saturation',
            'desc' => [
                'en' => 'Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
