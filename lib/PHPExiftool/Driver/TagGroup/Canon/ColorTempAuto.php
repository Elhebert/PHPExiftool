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
class ColorTempAuto extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempAuto';

    protected string $name = 'ColorTempAuto';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Auto',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45871
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46013
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46155
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46230
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46488
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46726
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46915
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47125
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47308
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47542
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47830
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempAuto',
            'desc' => [
                'en' => 'Color Temp Auto',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
