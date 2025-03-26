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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 340904
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 341016
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::AFInfo
             * line : 341860
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFPoint',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraInfo
             * line : 345135
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo.Sony:AFPoint',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraInfo2
             * line : 345718
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo2.Sony:AFPoint',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 346111
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPoint',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::CameraInfo3
             * line : 346392
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraInfo3.Sony:AFPoint',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
