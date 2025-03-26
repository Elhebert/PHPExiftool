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
class Megapixels extends AbstractTagGroup
{
    protected string $id = 'Composite:Megapixels';

    protected string $name = 'Megapixels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 90431
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:Megapixels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
