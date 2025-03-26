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
class UUID_Unknown extends AbstractTagGroup
{
    protected string $id = 'QuickTime:UUID-Unknown';

    protected string $name = 'UUID-Unknown';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 323878
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::Main.QuickTime:UUID-Unknown',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Movie
             * line : 324064
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::Movie.QuickTime:UUID-Unknown',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
