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
class MDItemFSSize extends AbstractTagGroup
{
    protected string $id = 'MacOS:MDItemFSSize';

    protected string $name = 'MDItemFSSize';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MD Item FS Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::MDItem
             * line : 118888
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MacOS::MDItem.MacOS:MDItemFSSize',
            'desc' => [
                'en' => 'MD Item FS Size',
            ],
        ],
    ];

    protected int $count = 0;
}
