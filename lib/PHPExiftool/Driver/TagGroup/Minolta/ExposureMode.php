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
class ExposureMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:ExposureMode';

    protected string $name = 'ExposureMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121776
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122295
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122600
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 122893
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125744
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:ExposureMode',
            'desc' => [
                'en' => 'Exposure Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
