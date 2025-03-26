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
class ColorTempShade extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempShade';

    protected string $name = 'ColorTempShade';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Shade',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45895
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46037
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData1
             * line : 46167
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData1.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46308
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46608
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46750
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46933
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47173
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47386
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47626
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47908
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempShade',
            'desc' => [
                'en' => 'Color Temp Shade',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
