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
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Kodak:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 106007
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Free
             * line : 106061
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Free.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::MOV
             * line : 108642
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::MOV.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::Main
             * line : 108729
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109114
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::SubIFD2
             * line : 109306
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD2.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        6 => [
            /**
             * table_name : Kodak::Type10
             * line : 109525
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type10.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        7 => [
            /**
             * table_name : Kodak::Type3
             * line : 109631
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type3.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        8 => [
            /**
             * table_name : Kodak::Type5
             * line : 109665
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type5.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        9 => [
            /**
             * table_name : Kodak::Type6
             * line : 109726
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type6.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        10 => [
            /**
             * table_name : Kodak::Type9
             * line : 109760
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        11 => [
            /**
             * table_name : Kodak::Type9
             * line : 109763
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type9.Kodak:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
