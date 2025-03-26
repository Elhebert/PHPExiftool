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
class FlashInfoVersion extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashInfoVersion';

    protected string $name = 'FlashInfoVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Info Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130311
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130646
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131013
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131421
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 131820
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::FlashInfo0300
             * line : 132163
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0300.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::FlashInfoUnknown
             * line : 132237
             * type : string
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfoUnknown.Nikon:FlashInfoVersion',
            'desc' => [
                'en' => 'Flash Info Version',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
