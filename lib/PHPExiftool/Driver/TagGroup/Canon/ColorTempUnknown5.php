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
class ColorTempUnknown5 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown5';

    protected string $name = 'ColorTempUnknown5';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 5',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45949
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46091
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46266
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46524
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46804
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47161
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47344
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47578
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47866
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown5',
            'desc' => [
                'en' => 'Color Temp Unknown 5',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
