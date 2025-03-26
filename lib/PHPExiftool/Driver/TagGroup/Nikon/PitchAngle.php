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
class PitchAngle extends AbstractTagGroup
{
    protected string $id = 'Nikon:PitchAngle';

    protected string $name = 'PitchAngle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD4S
             * line : 206941
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD4S.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD500
             * line : 207747
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD500.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 207936
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD810
             * line : 209141
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD810.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD850
             * line : 209233
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD850.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 209346
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 209429
             * type : fixed32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:PitchAngle',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
