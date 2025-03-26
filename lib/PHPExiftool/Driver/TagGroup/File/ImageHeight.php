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
        'en' => 'Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2024
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : BMP::OS2
             * line : 2168
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::OS2.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        2 => [
            /**
             * table_name : BPG::Main
             * line : 2274
             * type : var_ue7
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        3 => [
            /**
             * table_name : DPX::Main
             * line : 78118
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        4 => [
            /**
             * table_name : Extra
             * line : 85190
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        5 => [
            /**
             * table_name : FLIF::Main
             * line : 85528
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        6 => [
            /**
             * table_name : JPEG::SOF
             * line : 105234
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SOF.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        7 => [
            /**
             * table_name : MRC::Main
             * line : 113542
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        8 => [
            /**
             * table_name : Other::PFM
             * line : 182453
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Other::PFM.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        9 => [
            /**
             * table_name : PCX::Main
             * line : 182511
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
        10 => [
            /**
             * table_name : PGF::Main
             * line : 182813
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PGF::Main.File:ImageHeight',
            'desc' => [
                'en' => 'Image Height',
            ],
        ],
    ];

    protected int $count = 0;
}
