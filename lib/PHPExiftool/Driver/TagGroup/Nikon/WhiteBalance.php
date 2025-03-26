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
class WhiteBalance extends AbstractTagGroup
{
    protected string $id = 'Nikon:WhiteBalance';

    protected string $name = 'WhiteBalance';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'White Balance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AVITags
             * line : 130032
             * type : string
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AVITags.Nikon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MOV
             * line : 132800
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MOV.Nikon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::Main
             * line : 132848
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::NCTG
             * line : 137120
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.Nikon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::Type2
             * line : 141286
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Type2.Nikon:WhiteBalance',
            'desc' => [
                'en' => 'White Balance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
