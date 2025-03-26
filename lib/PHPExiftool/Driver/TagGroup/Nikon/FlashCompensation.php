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
class FlashCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashCompensation';

    protected string $name = 'FlashCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 192549
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 193053
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 193625
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 194608
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 194776
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::FlashInfo0300
             * line : 195227
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0300.Nikon:FlashCompensation',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
