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
class AFPoint extends AbstractTagGroup
{
    protected string $id = 'Sony:AFPoint';

    protected string $name = 'AFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238416
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::AFInfo
             * line : 239130
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 241972
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 242389
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242615
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 242767
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPoint',
            'desc' => [
                'en' => 'AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
