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
        'en' => 'Flash Group B Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130639
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupBCompensation',
            'desc' => [
                'en' => 'Flash Group B Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 131000
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupBCompensation',
            'desc' => [
                'en' => 'Flash Group B Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131399
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupBCompensation',
            'desc' => [
                'en' => 'Flash Group B Compensation',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131807
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupBCompensation',
            'desc' => [
                'en' => 'Flash Group B Compensation',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 132150
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupBCompensation',
            'desc' => [
                'en' => 'Flash Group B Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
