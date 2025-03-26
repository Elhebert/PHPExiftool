<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorTempDaylight extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempDaylight';

    protected string $name = 'ColorTempDaylight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Daylight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45889
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46031
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46161
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46302
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46602
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46744
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46927
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47167
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47380
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47620
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47902
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempDaylight',
            'desc' => [
                'en' => 'Color Temp Daylight',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
