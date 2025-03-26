<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class YawAngle extends AbstractTagGroup
{
    protected string $id = 'Nikon:YawAngle';

    protected string $name = 'YawAngle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Yaw Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 139263
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139967
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140075
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 141044
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141120
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141194
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141261
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:YawAngle',
            'desc' => [
                'en' => 'Yaw Angle',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
