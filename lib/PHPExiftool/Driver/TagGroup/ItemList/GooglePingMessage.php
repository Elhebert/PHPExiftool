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
class GooglePingMessage extends AbstractTagGroup
{
    protected string $id = 'ItemList:GooglePingMessage';

    protected string $name = 'GooglePingMessage';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Google Ping Message',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemList
             * line : 227747
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemList.ItemList:GooglePingMessage',
            'desc' => [
                'en' => 'Google Ping Message',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
