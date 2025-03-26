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
class LayerNames extends AbstractTagGroup
{
    protected string $id = 'Photoshop:LayerNames';

    protected string $name = 'LayerNames';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Layers
             * line : 305338
             * type : string
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'Photoshop::Layers.Photoshop:LayerNames',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
