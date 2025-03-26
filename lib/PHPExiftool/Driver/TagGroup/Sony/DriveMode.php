<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DriveMode extends AbstractTagGroup
{
    protected string $id = 'Sony:DriveMode';

    protected string $name = 'DriveMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Drive Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 242963
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244274
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 245023
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:DriveMode',
            'desc' => [
                'en' => 'Drive Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
