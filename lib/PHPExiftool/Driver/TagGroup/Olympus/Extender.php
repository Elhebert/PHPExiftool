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
class Extender extends AbstractTagGroup
{
    protected string $id = 'Olympus:Extender';

    protected string $name = 'Extender';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Equipment
             * line : 254519
             * type : int8u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Olympus::Equipment.Olympus:Extender',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
