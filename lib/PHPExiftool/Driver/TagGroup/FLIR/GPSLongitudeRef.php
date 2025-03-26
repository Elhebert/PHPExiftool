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
class GPSLongitudeRef extends AbstractTagGroup
{
    protected string $id = 'FLIR:GPSLongitudeRef';

    protected string $name = 'GPSLongitudeRef';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::GPSInfo
             * line : 122745
             * type : string
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'FLIR::GPSInfo.FLIR:GPSLongitudeRef',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;
}
