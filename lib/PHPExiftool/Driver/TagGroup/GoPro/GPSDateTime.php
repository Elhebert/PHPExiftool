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
class GPSDateTime extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSDateTime';

    protected string $name = 'GPSDateTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'GPS Date Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GLPI
             * line : 97536
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GLPI.GoPro:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date Time',
            ],
        ],
        1 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97649
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPMF.GoPro:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date Time',
            ],
        ],
    ];

    protected int $count = 0;
}
