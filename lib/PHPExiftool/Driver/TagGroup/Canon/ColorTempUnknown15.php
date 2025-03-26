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
class ColorTempUnknown15 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown15';

    protected string $name = 'ColorTempUnknown15';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 15',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46368
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46590
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46864
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47263
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47446
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47680
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47968
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown15',
            'desc' => [
                'en' => 'Color Temp Unknown 15',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
