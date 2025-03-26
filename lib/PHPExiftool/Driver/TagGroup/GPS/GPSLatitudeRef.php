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
class GPSLatitudeRef extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSLatitudeRef';

    protected string $name = 'GPSLatitudeRef';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 131706
             * type : string
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSLatitudeRef',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : H264::MDPM
             * line : 141314
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'H264::MDPM.GPS:GPSLatitudeRef',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::NCTG
             * line : 202765
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::NCTG.GPS:GPSLatitudeRef',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::PENT
             * line : 301091
             * type : string
             * writable : false
             * count : 2
             * flags : permanent
             */
            'id' => 'Pentax::PENT.GPS:GPSLatitudeRef',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
