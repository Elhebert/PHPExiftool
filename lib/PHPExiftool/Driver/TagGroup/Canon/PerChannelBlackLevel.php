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
class PerChannelBlackLevel extends AbstractTagGroup
{
    protected string $id = 'Canon:PerChannelBlackLevel';

    protected string $name = 'PerChannelBlackLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Per Channel Black Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46455
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46707
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46990
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47041
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47053
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47059
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData5
             * line : 47092
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData5
             * line : 47095
             * type : int16s
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47272
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47485
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        10 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47500
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        11 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47776
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        12 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47788
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
        13 => [
            /**
             * table_name : Canon::ColorData9
             * line : 48055
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:PerChannelBlackLevel',
            'desc' => [
                'en' => 'Per Channel Black Level',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
