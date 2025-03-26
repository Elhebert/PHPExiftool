<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Reconyx;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FirmwareVersion extends AbstractTagGroup
{
    protected string $id = 'Reconyx:FirmwareVersion';

    protected string $name = 'FirmwareVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Firmware Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Reconyx::Main
             * line : 232613
             * type : int16u
             * writable : false
             * count : 3
             * flags : permanent
             */
            'id' => 'Reconyx::Main.Reconyx:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        1 => [
            /**
             * table_name : Reconyx::Type2
             * line : 232719
             * type : undef
             * writable : true
             * count : 7
             * flags : permanent
             */
            'id' => 'Reconyx::Type2.Reconyx:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
        2 => [
            /**
             * table_name : Reconyx::Type3
             * line : 232845
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Reconyx::Type3.Reconyx:FirmwareVersion',
            'desc' => [
                'en' => 'Firmware Version',
            ],
        ],
    ];

    protected int $flags = 2052;
}
