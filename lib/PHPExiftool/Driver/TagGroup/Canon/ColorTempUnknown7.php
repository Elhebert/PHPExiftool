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
class ColorTempUnknown7 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown7';

    protected string $name = 'ColorTempUnknown7';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 7',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45961
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46103
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46278
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46536
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46816
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47215
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47356
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47590
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47878
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown7',
            'desc' => [
                'en' => 'Color Temp Unknown 7',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
