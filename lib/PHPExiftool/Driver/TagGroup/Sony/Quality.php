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
class Quality extends AbstractTagGroup
{
    protected string $id = 'Sony:Quality';

    protected string $name = 'Quality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243665
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244237
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244565
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Main
             * line : 246654
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Main
             * line : 248241
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
