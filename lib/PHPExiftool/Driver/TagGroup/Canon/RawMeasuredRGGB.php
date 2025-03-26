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
class RawMeasuredRGGB extends AbstractTagGroup
{
    protected string $id = 'Canon:RawMeasuredRGGB';

    protected string $name = 'RawMeasuredRGGB';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Measured RGGB',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::ColorData2
             * line : 46891
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData2.Canon:RawMeasuredRGGB',
            'desc' => [
                'en' => 'Raw Measured RGGB',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::ColorData4
             * line : 47038
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData4.Canon:RawMeasuredRGGB',
            'desc' => [
                'en' => 'Raw Measured RGGB',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::ColorData6
             * line : 47269
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData6.Canon:RawMeasuredRGGB',
            'desc' => [
                'en' => 'Raw Measured RGGB',
            ],
        ],
        3 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47482
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:RawMeasuredRGGB',
            'desc' => [
                'en' => 'Raw Measured RGGB',
            ],
        ],
        4 => [
            /**
             * table_name : Canon::ColorData7
             * line : 47497
             * type : int32u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Canon::ColorData7.Canon:RawMeasuredRGGB',
            'desc' => [
                'en' => 'Raw Measured RGGB',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
