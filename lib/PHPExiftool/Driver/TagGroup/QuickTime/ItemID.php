<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ItemID extends AbstractTagGroup
{
    protected string $id = 'QuickTime:ItemID';

    protected string $name = 'ItemID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Item ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Rights
             * line : 229165
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Rights.QuickTime:ItemID',
            'desc' => [
                'en' => 'Item ID',
            ],
        ],
    ];

    protected int $count = 0;
}
