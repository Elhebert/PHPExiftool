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
class LensFStops extends AbstractTagGroup
{
    protected string $id = 'Nikon:LensFStops';

    protected string $name = 'LensFStops';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens F Stops',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LensData00
             * line : 132475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData00.Nikon:LensFStops',
            'desc' => [
                'en' => 'Lens F Stops',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::LensData01
             * line : 132518
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData01.Nikon:LensFStops',
            'desc' => [
                'en' => 'Lens F Stops',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::LensData0204
             * line : 132564
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0204.Nikon:LensFStops',
            'desc' => [
                'en' => 'Lens F Stops',
            ],
        ],
        3 => [
            /**
             * table_name : Nikon::LensData0800
             * line : 132643
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LensData0800.Nikon:LensFStops',
            'desc' => [
                'en' => 'Lens F Stops',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::Main
             * line : 133149
             * type : undef
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:LensFStops',
            'desc' => [
                'en' => 'Lens F Stops',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
