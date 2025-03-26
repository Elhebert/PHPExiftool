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
class RollAngle extends AbstractTagGroup
{
    protected string $id = 'Nikon:RollAngle';

    protected string $name = 'RollAngle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Roll Angle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 139257
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 139961
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140069
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 141038
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 141114
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141188
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141255
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:RollAngle',
            'desc' => [
                'en' => 'Roll Angle',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
