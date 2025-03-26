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
class ColorTempUnknown6 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown6';

    protected string $name = 'ColorTempUnknown6';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 6',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45955
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46097
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46272
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46530
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46810
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47209
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47350
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47584
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47872
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown6',
            'desc' => [
                'en' => 'Color Temp Unknown 6',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
