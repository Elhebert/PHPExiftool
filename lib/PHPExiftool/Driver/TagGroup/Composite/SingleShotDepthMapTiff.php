<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SingleShotDepthMapTiff extends AbstractTagGroup
{
    protected string $id = 'Composite:SingleShotDepthMapTiff';

    protected string $name = 'SingleShotDepthMapTiff';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Single Shot Depth Map Tiff',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 67895
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:SingleShotDepthMapTiff',
            'desc' => [
                'en' => 'Single Shot Depth Map Tiff',
            ],
        ],
    ];

    protected int $count = 0;
}
