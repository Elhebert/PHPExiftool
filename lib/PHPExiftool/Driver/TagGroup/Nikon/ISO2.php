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
        'en' => 'ISO2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ISOInfo
             * line : 132418
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ISOInfo.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoD300S
             * line : 138080
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300S.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoD300a
             * line : 138093
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300a.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::ShotInfoD300b
             * line : 138237
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD300b.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::ShotInfoD3S
             * line : 138526
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3S.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        5 => [
            /**
             * table_name : Nikon::ShotInfoD3X
             * line : 138542
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3X.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        6 => [
            /**
             * table_name : Nikon::ShotInfoD3a
             * line : 138555
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3a.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        7 => [
            /**
             * table_name : Nikon::ShotInfoD3b
             * line : 138628
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD3b.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        8 => [
            /**
             * table_name : Nikon::ShotInfoD5000
             * line : 140000
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD5000.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        9 => [
            /**
             * table_name : Nikon::ShotInfoD700
             * line : 140361
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD700.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
        10 => [
            /**
             * table_name : Nikon::ShotInfoD90
             * line : 141133
             * type : ?
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD90.Nikon:ISO2',
            'desc' => [
                'en' => 'ISO2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
