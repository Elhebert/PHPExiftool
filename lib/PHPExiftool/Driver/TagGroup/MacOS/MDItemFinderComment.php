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
class MDItemFinderComment extends AbstractTagGroup
{
    protected string $id = 'MacOS:MDItemFinderComment';

    protected string $name = 'MDItemFinderComment';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'MD Item Finder Comment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::MDItem
             * line : 118894
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'MacOS::MDItem.MacOS:MDItemFinderComment',
            'desc' => [
                'en' => 'MD Item Finder Comment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
