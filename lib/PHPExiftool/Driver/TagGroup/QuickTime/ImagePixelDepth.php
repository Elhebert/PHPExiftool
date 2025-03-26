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
class ImagePixelDepth extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ImagePixelDepth';

    protected string $name = 'ImagePixelDepth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Pixel Depth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemPropCont
             * line : 228545
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemPropCont.QuickTime:ImagePixelDepth',
            'desc' => [
                'en' => 'Image Pixel Depth',
            ],
        ],
    ];

    protected int $count = 0;
}
