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
class ImageStabilization extends AbstractTagGroup
{
    protected string $id = 'Minolta:ImageStabilization';

    protected string $name = 'ImageStabilization';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Stabilization',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122585
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122867
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 124133
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::ISInfoA100
             * line : 124221
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::ISInfoA100.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::Main
             * line : 124293
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        5 => [
            /**
             * table_name : Minolta::Main
             * line : 124625
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        6 => [
            /**
             * table_name : Minolta::Main
             * line : 125560
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
        7 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 126848
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ImageStabilization',
            'desc' => [
                'en' => 'Image Stabilization',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
