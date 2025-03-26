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
class HighlightEndPoints extends AbstractTagGroup
{
    protected string $id = 'Leaf:HighlightEndPoints';

    protected string $name = 'HighlightEndPoints';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Highlight End Points',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Leaf::Neutrals
             * line : 110632
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Leaf::Neutrals.Leaf:HighlightEndPoints',
            'desc' => [
                'en' => 'Highlight End Points',
            ],
        ],
    ];

    protected int $count = 0;
}
