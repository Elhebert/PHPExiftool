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
class StdHotFolder extends AbstractTagGroup
{
    protected string $id = 'Leaf:StdHotFolder';

    protected string $name = 'StdHotFolder';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::SaveSetup
             * line : 161982
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::SaveSetup.Leaf:StdHotFolder',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
