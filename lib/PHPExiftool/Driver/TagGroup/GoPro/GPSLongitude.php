<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Longitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GLPI
             * line : 97542
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GLPI.GoPro:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
        1 => [
            /**
             * table_name : GoPro::GPS5
             * line : 97846
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPS5.GoPro:GPSLongitude',
            'desc' => [
                'en' => 'GPS Longitude',
            ],
        ],
    ];

    protected int $count = 0;
}
