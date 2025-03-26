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
class ColorTempUnknown11 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown11';

    protected string $name = 'ColorTempUnknown11';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 11',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45985
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46127
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46344
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46560
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46566
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46840
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47239
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47422
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47614
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47944
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown11',
            'desc' => [
                'en' => 'Color Temp Unknown 11',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
