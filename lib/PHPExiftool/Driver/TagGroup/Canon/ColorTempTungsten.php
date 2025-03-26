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
class ColorTempTungsten extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempTungsten';

    protected string $name = 'ColorTempTungsten';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Tungsten',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45907
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46049
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46179
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46320
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46620
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46762
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46945
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47185
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47398
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47638
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47920
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempTungsten',
            'desc' => [
                'en' => 'Color Temp Tungsten',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
