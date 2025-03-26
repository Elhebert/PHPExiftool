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
class PrimaryAFPoint extends AbstractTagGroup
{
    protected string $id = 'Nikon:PrimaryAFPoint';

    protected string $name = 'PrimaryAFPoint';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Primary AF Point',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127567
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127728
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127769
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 127894
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128307
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128318
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128329
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128796
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128807
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128948
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129271
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        11 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129738
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
        12 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129779
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:PrimaryAFPoint',
            'desc' => [
                'en' => 'Primary AF Point',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
