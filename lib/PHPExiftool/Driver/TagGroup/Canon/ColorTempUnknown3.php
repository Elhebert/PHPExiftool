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
class ColorTempUnknown3 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown3';

    protected string $name = 'ColorTempUnknown3';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 3',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45937
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46079
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46254
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46512
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46792
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47149
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47332
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47566
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47854
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown3',
            'desc' => [
                'en' => 'Color Temp Unknown 3',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
