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
class LayerOpacities extends AbstractTagGroup
{
    protected string $id = 'Photoshop:LayerOpacities';

    protected string $name = 'LayerOpacities';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Layer Opacities',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Layers
             * line : 212172
             * type : int8u
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'Photoshop::Layers.Photoshop:LayerOpacities',
            'desc' => [
                'en' => 'Layer Opacities',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
