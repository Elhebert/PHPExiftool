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
class Model extends AbstractTagGroup
{
    protected string $id = 'Olympus:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Model Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::AVI
             * line : 171929
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::AVI.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::DSS
             * line : 174411
             * type : string
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Olympus::DSS.Olympus:Model',
            'desc' => [
                'en' => 'Model',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::MOV1
             * line : 176404
             * type : string
             * writable : false
             * count : 8
             * flags : permanent
             */
            'id' => 'Olympus::MOV1.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        3 => [
            /**
             * table_name : Olympus::MOV2
             * line : 177310
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::MOV2.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        4 => [
            /**
             * table_name : Olympus::MP4
             * line : 177335
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::MP4.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::OLYM
             * line : 178860
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::OLYM.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        6 => [
            /**
             * table_name : Olympus::WAV
             * line : 181246
             * type : string
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Olympus::WAV.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        7 => [
            /**
             * table_name : Olympus::prms
             * line : 181319
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Olympus::prms.Olympus:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
    ];

    protected int $flags = 4;
}
