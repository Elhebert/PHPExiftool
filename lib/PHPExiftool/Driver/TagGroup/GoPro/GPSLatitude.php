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
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Latitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GLPI
             * line : 97539
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GLPI.GoPro:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
        1 => [
            /**
             * table_name : GoPro::GPS5
             * line : 97843
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPS5.GoPro:GPSLatitude',
            'desc' => [
                'en' => 'GPS Latitude',
            ],
        ],
    ];

    protected int $count = 0;
}
