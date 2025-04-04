<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalFlashFirmware extends AbstractTagGroup
{
    protected string $id = 'Nikon:ExternalFlashFirmware';

    protected string $name = 'ExternalFlashFirmware';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'External Flash Firmware',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130328
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130663
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131030
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131438
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 131837
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::FlashInfo0300
             * line : 132180
             * type : int8u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0300.Nikon:ExternalFlashFirmware',
            'desc' => [
                'en' => 'External Flash Firmware',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
