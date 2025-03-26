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
class FocalLength extends AbstractTagGroup
{
    protected string $id = 'Nikon:FocalLength';

    protected string $name = 'FocalLength';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 191579
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 195664
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 195805
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 196012
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 196218
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::MOV
             * line : 196529
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:FocalLength',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::NCTG
             * line : 202665
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:FocalLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
