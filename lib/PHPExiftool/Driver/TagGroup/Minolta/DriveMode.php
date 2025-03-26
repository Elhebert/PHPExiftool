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
class DriveMode extends AbstractTagGroup
{
    protected string $id = 'Minolta:DriveMode';

    protected string $name = 'DriveMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Drive Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121865
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettingsA100
             * line : 123276
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettingsA100.Minolta:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125610
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
