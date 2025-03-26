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
class ColorTempUnknown4 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown4';

    protected string $name = 'ColorTempUnknown4';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45943
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46085
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46260
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46518
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46798
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47155
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47338
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47572
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47860
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown4',
            'desc' => [
                'en' => 'Color Temp Unknown 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
