<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensDataVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensDataVersion';

    protected string $name = 'LensDataVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 195542
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 195620
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 195761
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0400
             * line : 195902
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0400.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::LensData0402
             * line : 195923
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0402.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::LensData0403
             * line : 195944
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0403.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 195965
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::LensDataUnknown
             * line : 196250
             * type : string
             * writable : false
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensDataUnknown.Nikon:LensDataVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
