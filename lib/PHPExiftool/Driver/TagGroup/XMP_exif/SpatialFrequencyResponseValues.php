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
class SpatialFrequencyResponseValues extends AbstractTagGroup
{
    protected string $id = 'XMP-exif:SpatialFrequencyResponseValues';

    protected string $name = 'SpatialFrequencyResponseValues';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Spatial Frequency Response Values',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::exif
             * line : 288495
             * type : rational
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::exif.XMP-exif:SpatialFrequencyResponseValues',
            'desc' => [
                'en' => 'Spatial Frequency Response Values',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
