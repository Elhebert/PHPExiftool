<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MacOS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MDItemUserTags extends AbstractTagGroup
{
    protected string $id = 'MacOS:MDItemUserTags';

    protected string $name = 'MDItemUserTags';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'MD Item User Tags',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::MDItem
             * line : 119083
             * type : ?
             * writable : true
             * count :
             * flags : list,unsafe
             */
            'id' => 'MacOS::MDItem.MacOS:MDItemUserTags',
            'desc' => [
                'en' => 'MD Item User Tags',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2128;
}
