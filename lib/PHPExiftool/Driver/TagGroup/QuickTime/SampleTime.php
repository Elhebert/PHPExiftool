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
        'en' => 'Sample Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Accel360Fly
             * line : 216266
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Accel360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Fusion360Fly
             * line : 218943
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Fusion360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 218956
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::Gyro360Fly
             * line : 219105
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Gyro360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::Mag360Fly
             * line : 228800
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Mag360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::Rot360Fly
             * line : 229184
             * type : int64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Rot360Fly.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
        6 => [
            /**
             * table_name : QuickTime::Stream
             * line : 229387
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:SampleTime',
            'desc' => [
                'en' => 'Sample Time',
            ],
        ],
    ];

    protected int $count = 0;
}
