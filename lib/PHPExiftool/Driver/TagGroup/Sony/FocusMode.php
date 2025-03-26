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
class FocusMode extends AbstractTagGroup
{
    protected string $id = 'Sony:FocusMode';

    protected string $name = 'FocusMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focus Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238396
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238907
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242598
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242728
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243580
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244178
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Main
             * line : 247138
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Main
             * line : 250420
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Main
             * line : 250639
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251314
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag9402
             * line : 271273
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9402.Sony:FocusMode',
            'desc' => [
                'en' => 'Focus Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
