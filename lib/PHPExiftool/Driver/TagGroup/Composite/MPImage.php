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
class MPImage extends AbstractTagGroup
{
    protected string $id = 'Composite:MPImage';

    protected string $name = 'MPImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MP Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65275
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:MPImage',
            'desc' => [
                'en' => 'MP Image',
            ],
        ],
    ];

    protected int $count = 0;
}
