<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leica;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Leica:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Leica6
             * line : 274957
             * type : int8u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Panasonic::Leica6.Leica:FirmwareVersion',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Panasonic::Subdir
             * line : 279403
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Subdir.Leica:FirmwareVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
