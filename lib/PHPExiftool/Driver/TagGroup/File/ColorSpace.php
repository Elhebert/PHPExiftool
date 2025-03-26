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
class ColorSpace extends AbstractTagGroup
{
    protected string $id = 'File:ColorSpace';

    protected string $name = 'ColorSpace';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Color Space',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : BMP::Main
             * line : 2083
             * type : undef
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'BMP::Main.File:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        1 => [
            /**
             * table_name : BPG::Main
             * line : 2234
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'BPG::Main.File:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
        2 => [
            /**
             * table_name : Other::PFM
             * line : 182442
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Other::PFM.File:ColorSpace',
            'desc' => [
                'en' => 'Color Space',
            ],
        ],
    ];

    protected int $count = 4;
}
