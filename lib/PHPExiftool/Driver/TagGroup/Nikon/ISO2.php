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
class ISO2 extends AbstractTagGroup
{
    protected string $id = 'Nikon:ISO2';

    protected string $name = 'ISO2';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ISOInfo
             * line : 195479
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ISOInfo.Nikon:ISO2',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 205524
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:ISO2',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300a
             * line : 205553
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300a.Nikon:ISO2',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 205723
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:ISO2',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 206041
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:ISO2',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 206080
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:ISO2',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 206109
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:ISO2',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 206217
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ISO2',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 207798
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:ISO2',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 208288
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:ISO2',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 209264
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:ISO2',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
