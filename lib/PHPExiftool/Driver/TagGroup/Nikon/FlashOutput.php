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
class FlashOutput extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashOutput';

    protected string $name = 'FlashOutput';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Output',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130438
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130770
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131137
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131792
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134960
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135955
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140279
             * type : ?
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FlashOutput',
            'desc' => [
                'en' => 'Flash Output',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
