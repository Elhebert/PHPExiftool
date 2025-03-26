<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Leaf;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Orientation extends AbstractTagGroup
{
    protected string $id = 'Leaf:Orientation';

    protected string $name = 'Orientation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Orientation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::Selection
             * line : 110730
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::Selection.Leaf:Orientation',
            'desc' => [
                'en' => 'Orientation',
            ],
        ],
    ];

    protected int $count = 0;
}
