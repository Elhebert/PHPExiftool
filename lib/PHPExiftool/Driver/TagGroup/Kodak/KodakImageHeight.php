<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class KodakImageHeight extends AbstractTagGroup
{
    protected string $id = 'Kodak:KodakImageHeight';

    protected string $name = 'KodakImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Kodak Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 105998
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Main
             * line : 108683
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109105
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109132
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109464
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::Type2
             * line : 109601
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type2.Kodak:KodakImageHeight',
            'desc' => [
                'en' => 'Kodak Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
