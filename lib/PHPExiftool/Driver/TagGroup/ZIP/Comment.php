<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{
    protected string $id = 'ZIP:Comment';

    protected string $name = 'Comment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ZIP::GZIP
             * line : 414803
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ZIP::GZIP.ZIP:Comment',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
