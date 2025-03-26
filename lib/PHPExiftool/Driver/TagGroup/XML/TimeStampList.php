<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TimeStampList extends AbstractTagGroup
{
    protected string $id = 'XML:TimeStampList';

    protected string $name = 'TimeStampList';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LIF::Main
             * line : 160940
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LIF::Main.XML:TimeStampList',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
