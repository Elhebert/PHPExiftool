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
class FocusModeSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:FocusModeSetting';

    protected string $name = 'FocusModeSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Mode Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 241911
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:FocusModeSetting',
            'desc' => [
                'en' => 'Focus Mode Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242369
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:FocusModeSetting',
            'desc' => [
                'en' => 'Focus Mode Setting',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243095
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FocusModeSetting',
            'desc' => [
                'en' => 'Focus Mode Setting',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243834
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FocusModeSetting',
            'desc' => [
                'en' => 'Focus Mode Setting',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244497
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:FocusModeSetting',
            'desc' => [
                'en' => 'Focus Mode Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
