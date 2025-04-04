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
class ImageRegionBoundaryY extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:ImageRegionBoundaryY';

    protected string $name = 'ImageRegionBoundaryY';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Region Boundary Y',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289192
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:ImageRegionBoundaryY',
            'desc' => [
                'en' => 'Image Region Boundary Y',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
