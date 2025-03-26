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
class FlashMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:FlashMode';

    protected string $name = 'FlashMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121793
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122395
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122752
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123096
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:FlashMode',
            'desc' => [
                'en' => 'Flash Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
