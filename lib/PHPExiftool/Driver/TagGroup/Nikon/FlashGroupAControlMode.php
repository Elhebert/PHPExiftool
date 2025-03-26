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
class FlashGroupAControlMode extends AbstractTagGroup
{
    protected string $id = 'Nikon:FlashGroupAControlMode';

    protected string $name = 'FlashGroupAControlMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Group A Control Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::FlashInfo0100
             * line : 130572
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0100.Nikon:FlashGroupAControlMode',
            'desc' => [
                'en' => 'Flash Group A Control Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::FlashInfo0102
             * line : 130904
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0102.Nikon:FlashGroupAControlMode',
            'desc' => [
                'en' => 'Flash Group A Control Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::FlashInfo0103
             * line : 131303
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0103.Nikon:FlashGroupAControlMode',
            'desc' => [
                'en' => 'Flash Group A Control Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::FlashInfo0106
             * line : 131705
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0106.Nikon:FlashGroupAControlMode',
            'desc' => [
                'en' => 'Flash Group A Control Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::FlashInfo0107
             * line : 132054
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::FlashInfo0107.Nikon:FlashGroupAControlMode',
            'desc' => [
                'en' => 'Flash Group A Control Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
