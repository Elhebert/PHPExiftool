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
class FlashGroupCCompensation extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupCCompensation';

    protected string $name = 'FlashGroupCCompensation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Group C Compensation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 131006
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupCCompensation',
            'desc' => [
                'en' => 'Flash Group C Compensation',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131405
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupCCompensation',
            'desc' => [
                'en' => 'Flash Group C Compensation',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131813
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupCCompensation',
            'desc' => [
                'en' => 'Flash Group C Compensation',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 132156
             * type : int8s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupCCompensation',
            'desc' => [
                'en' => 'Flash Group C Compensation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
