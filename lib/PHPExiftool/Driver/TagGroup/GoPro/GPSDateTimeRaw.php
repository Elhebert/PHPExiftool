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
class GPSDateTimeRaw extends AbstractTagGroup
{
    protected string $id = 'GoPro:GPSDateTimeRaw';

    protected string $name = 'GPSDateTimeRaw';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPRI
             * line : 139860
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPRI.GoPro:GPSDateTimeRaw',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
