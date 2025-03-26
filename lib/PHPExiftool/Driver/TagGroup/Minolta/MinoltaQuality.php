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
class MinoltaQuality extends AbstractTagGroup
{
    protected string $id = 'Minolta:MinoltaQuality';

    protected string $name = 'MinoltaQuality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Minolta Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings
             * line : 121842
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings.Minolta:MinoltaQuality',
            'desc' => [
                'en' => 'Minolta Quality',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122332
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:MinoltaQuality',
            'desc' => [
                'en' => 'Minolta Quality',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122640
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:MinoltaQuality',
            'desc' => [
                'en' => 'Minolta Quality',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 124521
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:MinoltaQuality',
            'desc' => [
                'en' => 'Minolta Quality',
            ],
        ],
        4 => [
            /**
             * table_name : Minolta::Main
             * line : 124544
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::Main.Minolta:MinoltaQuality',
            'desc' => [
                'en' => 'Minolta Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
