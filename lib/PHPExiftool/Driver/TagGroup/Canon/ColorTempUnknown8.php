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
class ColorTempUnknown8 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown8';

    protected string $name = 'ColorTempUnknown8';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 8',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45967
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46109
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46284
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46542
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46822
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47221
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47362
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47596
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47884
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown8',
            'desc' => [
                'en' => 'Color Temp Unknown 8',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
