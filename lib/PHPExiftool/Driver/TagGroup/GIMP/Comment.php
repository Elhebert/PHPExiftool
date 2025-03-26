<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{
    protected string $id = 'GIMP:Comment';

    protected string $name = 'Comment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GIMP::Parasite
             * line : 131622
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GIMP::Parasite.GIMP:Comment',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
