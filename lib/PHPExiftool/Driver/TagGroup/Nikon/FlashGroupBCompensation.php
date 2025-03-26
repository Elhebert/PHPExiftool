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
class FlashGroupBCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupBCompensation';

    protected string $name = 'FlashGroupBCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 192841
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupBCompensation',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 193401
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupBCompensation',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 194013
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupBCompensation',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 194637
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupBCompensation',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 195124
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupBCompensation',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
