<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GraphConv;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Quality extends AbstractTagGroup
{
    protected string $id = 'GraphConv:Quality';

    protected string $name = 'Quality';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : JPEG::GraphConv
             * line : 152444
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'JPEG::GraphConv.GraphConv:Quality',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
