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
class ISO extends AbstractTagGroup
{
    protected string $id = 'Kodak:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 154436
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:ISO',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Free
             * line : 154610
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:ISO',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::Main
             * line : 158192
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:ISO',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 158871
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:ISO',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 158890
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:ISO',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::SubIFD1
             * line : 158941
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD1.Kodak:ISO',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Kodak::SubIFD1
             * line : 158956
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD1.Kodak:ISO',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 159319
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:ISO',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 159653
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:ISO',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 159668
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:ISO',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Kodak::Type10
             * line : 159890
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type10.Kodak:ISO',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Kodak::Type3
             * line : 160118
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type3.Kodak:ISO',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Kodak::Type5
             * line : 160252
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:ISO',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Kodak::Type6
             * line : 160439
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type6.Kodak:ISO',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Kodak::Type9
             * line : 160627
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:ISO',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
