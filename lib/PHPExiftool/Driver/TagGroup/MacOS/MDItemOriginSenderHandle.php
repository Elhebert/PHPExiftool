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
class MDItemOriginSenderHandle extends AbstractTagGroup
{
    protected string $id = 'MacOS:MDItemOriginSenderHandle';

    protected string $name = 'MDItemOriginSenderHandle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'MD Item Origin Sender Handle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MacOS::MDItem
             * line : 118987
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MacOS::MDItem.MacOS:MDItemOriginSenderHandle',
            'desc' => [
                'en' => 'MD Item Origin Sender Handle',
            ],
        ],
    ];

    protected int $count = 0;
}
