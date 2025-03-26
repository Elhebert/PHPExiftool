<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SampleTime extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SampleTime';

    protected string $name = 'SampleTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Accel360Fly
             * line : 310354
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Accel360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Fusion360Fly
             * line : 313113
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Fusion360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 313126
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::Gyro360Fly
             * line : 313360
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Gyro360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::Mag360Fly
             * line : 323728
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Mag360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::Rot360Fly
             * line : 324394
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Rot360Fly.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : QuickTime::Stream
             * line : 324903
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:SampleTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
