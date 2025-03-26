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
class StartTime extends AbstractTagGroup
{
    protected string $id = 'Olympus:StartTime';

    protected string $name = 'StartTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::DSS
             * line : 253038
             * type : string
             * writable : false
             * count : 12
             * flags : permanent
             */
            'id' => 'Olympus::DSS.Olympus:StartTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 12;

    protected int $flags = 4;
}
