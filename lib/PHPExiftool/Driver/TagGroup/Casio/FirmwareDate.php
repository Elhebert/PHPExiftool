<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareDate extends AbstractTagGroup
{
    protected string $id = 'Casio:FirmwareDate';

    protected string $name = 'FirmwareDate';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Main
             * line : 61829
             * type : string
             * writable : true
             * count : 18
             * flags : permanent
             */
            'id' => 'Casio::Main.Casio:FirmwareDate',
            'desc' => [
                'en' => 'Firmware Date',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62142
             * type : string
             * writable : true
             * count : 18
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:FirmwareDate',
            'desc' => [
                'en' => 'Firmware Date',
            ],
        ],
    ];

    protected int $count = 18;

    protected int $flags = 2052;
}
