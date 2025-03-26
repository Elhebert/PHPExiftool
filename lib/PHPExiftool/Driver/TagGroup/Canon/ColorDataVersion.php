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
        'en' => 'Color Data Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 46210
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData10.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 46471
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData11.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData3
             * line : 46898
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData3.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47009
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData5
             * line : 47081
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData5.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47108
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47288
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 47516
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData8.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 47804
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorData9.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
        9 => [
            /**
             * table_name : Canon::ColorDataUnknown
             * line : 48071
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Canon::ColorDataUnknown.Canon:ColorDataVersion',
            'desc' => [
                'en' => 'Color Data Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
