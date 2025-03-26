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
class ColorTempUnknown2 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown2';

    protected string $name = 'ColorTempUnknown2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45931
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46073
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46248
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46506
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46786
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47143
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47326
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47560
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47848
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown2',
            'desc' => [
                'en' => 'Color Temp Unknown 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
