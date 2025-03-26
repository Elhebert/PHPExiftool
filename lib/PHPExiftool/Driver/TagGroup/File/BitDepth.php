<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BitDepth extends AbstractTagGroup
{
    protected string $id = 'File:BitDepth';

    protected string $name = 'BitDepth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Bit Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2030
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
        1 => [
            /**
             * table_name : BMP::OS2
             * line : 2174
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::OS2.File:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
        2 => [
            /**
             * table_name : BPG::Main
             * line : 2231
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
        3 => [
            /**
             * table_name : DPX::Main
             * line : 78330
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
        4 => [
            /**
             * table_name : FLIF::Main
             * line : 85511
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:BitDepth',
            'desc' => [
                'en' => 'Bit Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
