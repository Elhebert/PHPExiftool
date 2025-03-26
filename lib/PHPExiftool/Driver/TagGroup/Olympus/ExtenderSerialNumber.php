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
class ExtenderSerialNumber extends AbstractTagGroup
{
    protected string $id = 'Olympus:ExtenderSerialNumber';

    protected string $name = 'ExtenderSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Equipment
             * line : 254542
             * type : string
             * writable : true
             * count : 32
             * flags : permanent
             */
            'id' => 'Olympus::Equipment.Olympus:ExtenderSerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 32;

    protected int $flags = 2052;
}
