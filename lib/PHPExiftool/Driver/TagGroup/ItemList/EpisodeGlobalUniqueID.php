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
class EpisodeGlobalUniqueID extends AbstractTagGroup
{
    protected string $id = 'ItemList:EpisodeGlobalUniqueID';

    protected string $name = 'EpisodeGlobalUniqueID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Episode Global Unique ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 219804
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:EpisodeGlobalUniqueID',
            'desc' => [
                'en' => 'Episode Global Unique ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
