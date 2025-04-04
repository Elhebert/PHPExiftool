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
class FlashWirelessOption extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashWirelessOption';

    protected string $name = 'FlashWirelessOption';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Wireless Option',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134963
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashWirelessOption',
            'desc' => [
                'en' => 'Flash Wireless Option',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135972
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashWirelessOption',
            'desc' => [
                'en' => 'Flash Wireless Option',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140319
             * type : ?
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FlashWirelessOption',
            'desc' => [
                'en' => 'Flash Wireless Option',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
