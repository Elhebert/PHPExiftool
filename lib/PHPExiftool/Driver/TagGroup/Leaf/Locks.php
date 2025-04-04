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
class Locks extends AbstractTagGroup
{
    protected string $id = 'Leaf:Locks';

    protected string $name = 'Locks';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Locks',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::Selection
             * line : 110724
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::Selection.Leaf:Locks',
            'desc' => [
                'en' => 'Locks',
            ],
        ],
    ];

    protected int $count = 0;
}
