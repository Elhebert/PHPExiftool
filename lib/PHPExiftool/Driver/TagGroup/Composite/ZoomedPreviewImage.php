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
class ZoomedPreviewImage extends AbstractTagGroup
{
    protected string $id = 'Composite:ZoomedPreviewImage';

    protected string $name = 'ZoomedPreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Zoomed Preview Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 67581
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:ZoomedPreviewImage',
            'desc' => [
                'en' => 'Zoomed Preview Image',
            ],
        ],
    ];

    protected int $count = 0;
}
