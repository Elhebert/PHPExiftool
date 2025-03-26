<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MinoltaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareID extends AbstractTagGroup
{
    protected string $id = 'MinoltaRaw:FirmwareID';

    protected string $name = 'FirmwareID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MinoltaRaw::PRD
             * line : 186737
             * type : string
             * writable : true
             * count : 8
             * flags : permanent
             */
            'id' => 'MinoltaRaw::PRD.MinoltaRaw:FirmwareID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2052;
}
