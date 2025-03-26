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
class FlashGroupCControlMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupCControlMode';

    protected string $name = 'FlashGroupCControlMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Group C Control Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130962
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupCControlMode',
            'desc' => [
                'en' => 'Flash Group C Control Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131361
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupCControlMode',
            'desc' => [
                'en' => 'Flash Group C Control Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131763
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupCControlMode',
            'desc' => [
                'en' => 'Flash Group C Control Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 132112
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupCControlMode',
            'desc' => [
                'en' => 'Flash Group C Control Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
