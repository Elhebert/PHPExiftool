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
class LayerUnicodeNames extends AbstractTagGroup
{
    protected string $id = 'Photoshop:LayerUnicodeNames';

    protected string $name = 'LayerUnicodeNames';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Layer Unicode Names',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Layers
             * line : 212178
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'Photoshop::Layers.Photoshop:LayerUnicodeNames',
            'desc' => [
                'en' => 'Layer Unicode Names',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
