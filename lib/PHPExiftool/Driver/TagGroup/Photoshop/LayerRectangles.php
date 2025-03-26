<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LayerRectangles extends AbstractTagGroup
{
    protected string $id = 'Photoshop:LayerRectangles';

    protected string $name = 'LayerRectangles';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Layers
             * line : 305346
             * type : int32u
             * writable : false
             * count : 4
             * flags : list
             */
            'id' => 'Photoshop::Layers.Photoshop:LayerRectangles',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 64;
}
