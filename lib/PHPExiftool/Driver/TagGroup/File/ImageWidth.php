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
class ImageWidth extends AbstractTagGroup
{
    protected string $id = 'File:ImageWidth';

    protected string $name = 'ImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2021
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        1 => [
            /**
             * table_name : BMP::OS2
             * line : 2165
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BMP::OS2.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        2 => [
            /**
             * table_name : BPG::Main
             * line : 2271
             * type : var_ue7
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        3 => [
            /**
             * table_name : DPX::Main
             * line : 78115
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'DPX::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        4 => [
            /**
             * table_name : Extra
             * line : 85193
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        5 => [
            /**
             * table_name : FLIF::Main
             * line : 85525
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIF::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        6 => [
            /**
             * table_name : JPEG::SOF
             * line : 105237
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::SOF.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        7 => [
            /**
             * table_name : MRC::Main
             * line : 113539
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        8 => [
            /**
             * table_name : Other::PFM
             * line : 182456
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Other::PFM.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        9 => [
            /**
             * table_name : PCX::Main
             * line : 182508
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PCX::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
        10 => [
            /**
             * table_name : PGF::Main
             * line : 182810
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PGF::Main.File:ImageWidth',
            'desc' => [
                'en' => 'Image Width',
            ],
        ],
    ];

    protected int $count = 0;
}
