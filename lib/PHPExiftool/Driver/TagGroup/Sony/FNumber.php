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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Sony:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 346671
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:FNumber',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 348356
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:FNumber',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360802
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FNumber',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360869
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FNumber',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360938
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:FNumber',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::PMP
             * line : 361486
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:FNumber',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::rtmd
             * line : 393413
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Sony::rtmd.Sony:FNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
