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
class FlashGroupBControlMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupBControlMode';

    protected string $name = 'FlashGroupBControlMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 192765
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupBControlMode',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 193269
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupBControlMode',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 193881
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupBControlMode',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 194485
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupBControlMode',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 194992
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupBControlMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
