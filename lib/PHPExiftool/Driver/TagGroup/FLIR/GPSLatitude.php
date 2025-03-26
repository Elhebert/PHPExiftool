<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'FLIR:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::GPSInfo
             * line : 122801
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::GPSInfo.FLIR:GPSLatitude',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : FLIR::GPS_UUID
             * line : 123125
             * type : float
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'FLIR::GPS_UUID.FLIR:GPSLatitude',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
