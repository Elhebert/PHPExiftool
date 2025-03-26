<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{
    protected string $id = 'Sony:Comment';

    protected string $name = 'Comment';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::PMP
             * line : 361414
             * type : string
             * writable : false
             * count : 19
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:Comment',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 19;

    protected int $flags = 4;
}
