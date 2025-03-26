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
class CameraOrientation extends AbstractTagGroup
{
    protected string $id = 'Sony:CameraOrientation';

    protected string $name = 'CameraOrientation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246180
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246197
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::Tag9400a
             * line : 270820
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400a.Sony:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Tag9400b
             * line : 270993
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400b.Sony:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9400c
             * line : 271196
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9400c.Sony:CameraOrientation',
            'desc' => [
                'en' => 'Camera Orientation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
