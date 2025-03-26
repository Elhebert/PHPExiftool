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
class ColorTempKelvin extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempKelvin';

    protected string $name = 'ColorTempKelvin';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Temp Kelvin',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 45919
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 46061
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46332
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46632
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46774
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46957
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47197
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47410
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47650
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47932
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempKelvin',
            'desc' => [
                'en' => 'Color Temp Kelvin',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
