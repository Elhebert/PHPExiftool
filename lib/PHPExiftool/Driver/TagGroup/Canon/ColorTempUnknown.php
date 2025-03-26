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
class ColorTempUnknown extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown';

    protected string $name = 'ColorTempUnknown';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45883
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46025
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46242
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46500
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46732
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47137
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47320
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47554
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47842
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown',
            'desc' => [
                'en' => 'Color Temp Unknown',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
