<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalPlaneYResolution extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:FocalPlaneYResolution';

    protected string $name = 'FocalPlaneYResolution';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Plane Y Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82926
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:FocalPlaneYResolution',
            'desc' => [
                'en' => 'Focal Plane Y Resolution',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83411
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:FocalPlaneYResolution',
            'desc' => [
                'en' => 'Focal Plane Y Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
