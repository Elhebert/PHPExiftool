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
class ColorDataVersion extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorDataVersion';

    protected string $name = 'ColorDataVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 59843
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60296
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData3
             * line : 61075
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData4
             * line : 61288
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData5
             * line : 61364
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 61394
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 61724
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 62128
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 62610
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorDataUnknown
             * line : 63069
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorDataUnknown.Canon:ColorDataVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
