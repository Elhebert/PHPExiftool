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
class DiskNumber extends AbstractTagGroup
{
    protected string $id = 'ItemList:DiskNumber';

    protected string $name = 'DiskNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 314220
             * type : undef
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:DiskNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
