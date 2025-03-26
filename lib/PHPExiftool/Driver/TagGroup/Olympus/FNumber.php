<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FNumber extends AbstractTagGroup
{
    protected string $id = 'Olympus:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::AVI
             * line : 172816
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::AVI.Olympus:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::MOV1
             * line : 177294
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MOV1.Olympus:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::MOV2
             * line : 177316
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MOV2.Olympus:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        3 => [
            /**
             * table_name : Olympus::MP4
             * line : 177367
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::MP4.Olympus:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
        4 => [
            /**
             * table_name : Olympus::OLYM
             * line : 179747
             * type : rational64u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::OLYM.Olympus:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
