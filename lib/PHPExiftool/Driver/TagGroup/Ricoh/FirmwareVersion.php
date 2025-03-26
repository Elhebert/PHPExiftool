<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Ricoh:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Main
             * line : 233350
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Ricoh::Text
             * line : 234060
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Text.Ricoh:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        2 => [
            /**
             * table_name : Ricoh::Text
             * line : 234066
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Text.Ricoh:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
