<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageSpatialExtent extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ImageSpatialExtent';

    protected string $name = 'ImageSpatialExtent';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Spatial Extent',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemPropCont
             * line : 228539
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemPropCont.QuickTime:ImageSpatialExtent',
            'desc' => [
                'en' => 'Image Spatial Extent',
            ],
        ],
    ];

    protected int $count = 0;
}
