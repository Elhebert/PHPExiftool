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
class KodakImageWidth extends AbstractTagGroup
{
    protected string $id = 'Kodak:KodakImageWidth';

    protected string $name = 'KodakImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Kodak Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::CameraInfo
             * line : 105995
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::CameraInfo.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::Main
             * line : 108680
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Main.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
        2 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109102
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
        3 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109129
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
        4 => [
            /**
             * table_name : Kodak::TextualInfo
             * line : 109509
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::TextualInfo.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
        5 => [
            /**
             * table_name : Kodak::Type2
             * line : 109598
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Type2.Kodak:KodakImageWidth',
            'desc' => [
                'en' => 'Kodak Image Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
