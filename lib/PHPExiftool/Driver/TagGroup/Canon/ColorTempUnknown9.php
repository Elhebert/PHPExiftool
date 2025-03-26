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
class ColorTempUnknown9 extends AbstractTagGroup
{
    protected string $id = 'Canon:ColorTempUnknown9';

    protected string $name = 'ColorTempUnknown9';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorCoefs
             * line : 59375
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorCoefs2
             * line : 59653
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorCoefs2.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData10
             * line : 59981
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData10.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData11
             * line : 60431
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData11.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData2
             * line : 60953
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData2.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Canon::ColorData6
             * line : 61628
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData6.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Canon::ColorData7
             * line : 61862
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData7.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Canon::ColorData8
             * line : 62272
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData8.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Canon::ColorData9
             * line : 62754
             * type : int16s
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Canon::ColorData9.Canon:ColorTempUnknown9',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
