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
class DataLen extends AbstractTagGroup
{
    protected string $id = 'Leaf:DataLen';

    protected string $name = 'DataLen';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::Sharpness
             * line : 162075
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::Sharpness.Leaf:DataLen',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
