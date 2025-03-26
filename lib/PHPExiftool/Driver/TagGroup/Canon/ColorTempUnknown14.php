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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData10
             * line : 60135
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60497
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData2
             * line : 61008
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData6
             * line : 61683
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData7
             * line : 62016
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData8
             * line : 62426
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData9
             * line : 62908
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown14',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
