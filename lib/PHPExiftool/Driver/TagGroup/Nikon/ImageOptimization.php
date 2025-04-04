<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageOptimization extends AbstractTagGroup
{
    protected string $id = 'Nikon:ImageOptimization';

    protected string $name = 'ImageOptimization';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Optimization',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 134571
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:ImageOptimization',
            'desc' => [
                'en' => 'Image Optimization',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
