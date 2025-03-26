<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'Pentax:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Junk2
             * line : 288327
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Pentax::Junk2.Pentax:Make',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::MOV
             * line : 294513
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Pentax::MOV.Pentax:Make',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::PENT
             * line : 300944
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Pentax::PENT.Pentax:Make',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 24;

    protected int $flags = 4;
}
