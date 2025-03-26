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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'Olympus:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Equipment
             * line : 175320
             * type : string
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Olympus::Equipment.Olympus:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::Main
             * line : 178500
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        2 => [
            /**
             * table_name : Olympus::Main
             * line : 178683
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
