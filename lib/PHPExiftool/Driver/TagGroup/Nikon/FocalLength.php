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
        'en' => 'Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 129976
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132512
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132558
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132637
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132738
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::MOV
             * line : 132823
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137028
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:FocalLength',
            'desc' => [
                'en' => 'Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
