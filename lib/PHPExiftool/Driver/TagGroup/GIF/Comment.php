<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GIF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Comment extends AbstractTagGroup
{
    protected string $id = 'GIF:Comment';

    protected string $name = 'Comment';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GIF::Main
             * line : 90671
             * type : undef
             * writable : true
             * count :
             * flags :
             */
            'id' => 'GIF::Main.GIF:Comment',
            'desc' => [
                'en' => 'Comment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
