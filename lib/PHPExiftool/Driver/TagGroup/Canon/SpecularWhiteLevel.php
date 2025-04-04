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
class SpecularWhiteLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:SpecularWhiteLevel';

    protected string $name = 'SpecularWhiteLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Specular White Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46461
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46713
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47047
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47062
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47071
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData5
             * line : 47101
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47278
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47491
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47506
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47782
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47794
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48061
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:SpecularWhiteLevel',
            'desc' => [
                'en' => 'Specular White Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
