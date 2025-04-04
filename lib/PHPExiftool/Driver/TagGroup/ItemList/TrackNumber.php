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
class TrackNumber extends AbstractTagGroup
{
    protected string $id = 'ItemList:TrackNumber';

    protected string $name = 'TrackNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Track Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 228396
             * type : undef
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:TrackNumber',
            'desc' => [
                'en' => 'Track Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
