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
class GPSLongitudeRaw extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSLongitudeRaw';

    protected string $name = 'GPSLongitudeRaw';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPRI
             * line : 139868
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPRI.GoPro:GPSLongitudeRaw',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
