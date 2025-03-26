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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 179230
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 180059
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 182283
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::ISInfoA100
             * line : 182493
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::ISInfoA100.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::Main
             * line : 182765
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Minolta::Main
             * line : 183737
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Minolta::Main
             * line : 184785
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 186640
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ImageStabilization',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
