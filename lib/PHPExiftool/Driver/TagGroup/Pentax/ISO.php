<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISO extends AbstractTagGroup
{
    protected string $id = 'Pentax:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::MOV
             * line : 205970
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::MOV.Pentax:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::Main
             * line : 207468
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Main
             * line : 209581
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 209740
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::PENT.Pentax:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        4 => [
            /**
             * table_name : Pentax::Type2
             * line : 210637
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Type2.Pentax:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
