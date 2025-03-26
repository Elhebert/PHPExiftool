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
class SpatialFrequencyResponse extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:SpatialFrequencyResponse';

    protected string $name = 'SpatialFrequencyResponse';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Spatial Frequency Response',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288483
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::exif.XMP-exif:SpatialFrequencyResponse',
            'desc' => [
                'en' => 'Spatial Frequency Response',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
