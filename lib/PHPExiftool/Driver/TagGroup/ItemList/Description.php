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
class Description extends AbstractTagGroup
{
    protected string $id = 'ItemList:Description';

    protected string $name = 'Description';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 219795
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::ItemList.ItemList:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 219801
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'QuickTime::ItemList.ItemList:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 228447
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:Description',
            'desc' => [
                'en' => 'Description',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
