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
class ColorTempUnknown14 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown14';

    protected string $name = 'ColorTempUnknown14';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Unknown 14',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46362
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46584
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46858
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47257
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47440
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47674
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47962
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown14',
            'desc' => [
                'en' => 'Color Temp Unknown 14',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
