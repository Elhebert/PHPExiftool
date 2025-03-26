<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSSatellites extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSSatellites';

    protected string $name = 'GPSSatellites';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 131946
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSSatellites',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::NCTG
             * line : 203005
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSSatellites',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::PENT
             * line : 301331
             * type : string
             * writable : false
             * count : 3
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSSatellites',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
