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
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Pentax:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209688
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Type4
             * line : 210699
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Type4.Pentax:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
