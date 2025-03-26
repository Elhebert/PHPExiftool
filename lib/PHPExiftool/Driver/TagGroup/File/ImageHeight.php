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
class ImageHeight extends AbstractTagGroup
{
    protected string $id = 'File:ImageHeight';

    protected string $name = 'ImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 3218
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : BMP::OS2
             * line : 3514
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::OS2.File:ImageHeight',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : BPG::Main
             * line : 3710
             * type : var_ue7
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : DPX::Main
             * line : 105557
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Extra
             * line : 121408
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:ImageHeight',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : FLIF::Main
             * line : 122091
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : JPEG::SOF
             * line : 152973
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SOF.File:ImageHeight',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : MRC::Main
             * line : 166822
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Other::PFM
             * line : 263795
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Other::PFM.File:ImageHeight',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : PCX::Main
             * line : 263922
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : PGF::Main
             * line : 264487
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PGF::Main.File:ImageHeight',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
