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
class ImageRegionBoundaryX extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:ImageRegionBoundaryX';

    protected string $name = 'ImageRegionBoundaryX';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Region Boundary X',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289189
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionBoundaryX',
            'desc' => [
                'en' => 'Image Region Boundary X',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
