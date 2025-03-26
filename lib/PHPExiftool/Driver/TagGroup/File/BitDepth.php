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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 3241
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:BitDepth',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : BMP::OS2
             * line : 3537
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::OS2.File:BitDepth',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : BPG::Main
             * line : 3625
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:BitDepth',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : DPX::Main
             * line : 105820
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:BitDepth',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : FLIF::Main
             * line : 122054
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:BitDepth',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
