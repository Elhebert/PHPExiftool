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
        'en' => 'Lens Data Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132469
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132497
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132543
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0400
             * line : 132589
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0400.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::LensData0402
             * line : 132599
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0402.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::LensData0403
             * line : 132609
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0403.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132619
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::LensDataUnknown
             * line : 132748
             * type : string
             * writable : false
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::LensDataUnknown.Nikon:LensDataVersion',
            'desc' => [
                'en' => 'Lens Data Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
