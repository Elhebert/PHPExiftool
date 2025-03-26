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
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 106013
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Free
             * line : 106067
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::Main
             * line : 108830
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109120
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109126
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::SubIFD1
             * line : 109151
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD1.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        6 => [
            /**
             * table_name : Kodak::SubIFD1
             * line : 109154
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD1.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        7 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 109312
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        8 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109467
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        9 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109470
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        10 => [
            /**
             * table_name : Kodak::Type10
             * line : 109528
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type10.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        11 => [
            /**
             * table_name : Kodak::Type3
             * line : 109634
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type3.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        12 => [
            /**
             * table_name : Kodak::Type5
             * line : 109668
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        13 => [
            /**
             * table_name : Kodak::Type6
             * line : 109729
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type6.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        14 => [
            /**
             * table_name : Kodak::Type9
             * line : 109772
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
