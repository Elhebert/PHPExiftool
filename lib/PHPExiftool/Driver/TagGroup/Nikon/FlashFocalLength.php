<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashFocalLength extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashFocalLength';

    protected string $name = 'FlashFocalLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Focal Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130444
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashFocalLength',
            'desc' => [
                'en' => 'Flash Focal Length',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130776
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashFocalLength',
            'desc' => [
                'en' => 'Flash Focal Length',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131143
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashFocalLength',
            'desc' => [
                'en' => 'Flash Focal Length',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131545
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashFocalLength',
            'desc' => [
                'en' => 'Flash Focal Length',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 131926
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashFocalLength',
            'desc' => [
                'en' => 'Flash Focal Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
