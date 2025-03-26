<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RatingRegionGPSAltitude extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:RatingRegionGPSAltitude';

    protected string $name = 'RatingRegionGPSAltitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Rating Region GPS Altitude',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289405
             * type : rational
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:RatingRegionGPSAltitude',
            'desc' => [
                'en' => 'Rating Region GPS Altitude',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
