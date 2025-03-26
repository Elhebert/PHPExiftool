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
class FlashControlMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashControlMode';

    protected string $name = 'FlashControlMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Control Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130409
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130741
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131108
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131516
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 134821
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 135813
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140140
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:FlashControlMode',
            'desc' => [
                'en' => 'Flash Control Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
