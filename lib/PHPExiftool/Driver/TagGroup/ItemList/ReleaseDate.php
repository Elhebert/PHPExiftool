<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ItemList;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReleaseDate extends AbstractTagGroup
{
    protected string $id = 'ItemList:ReleaseDate';

    protected string $name = 'ReleaseDate';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Release Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 227830
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:ReleaseDate',
            'desc' => [
                'en' => 'Release Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
