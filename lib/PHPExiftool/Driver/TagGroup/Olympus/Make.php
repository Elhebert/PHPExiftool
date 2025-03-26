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
class Make extends AbstractTagGroup
{
    protected string $id = 'Olympus:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::AVI
             * line : 249415
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::AVI.Olympus:Make',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::MOV1
             * line : 255610
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::MOV1.Olympus:Make',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::MOV2
             * line : 256592
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::MOV2.Olympus:Make',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Olympus::MP4
             * line : 256719
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::MP4.Olympus:Make',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Olympus::OLYM
             * line : 259244
             * type : string
             * writable : false
             * count : 26
             * flags : permanent
             */
            'id' => 'Olympus::OLYM.Olympus:Make',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::prms
             * line : 262325
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::prms.Olympus:Make',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 4;
}
