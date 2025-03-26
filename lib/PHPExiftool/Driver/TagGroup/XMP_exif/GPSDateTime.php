<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_exif;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDateTime extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:GPSDateTime';

    protected string $name = 'GPSDateTime';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Date/Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288242
             * type : date
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:GPSDateTime',
            'desc' => [
                'en' => 'GPS Date/Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
