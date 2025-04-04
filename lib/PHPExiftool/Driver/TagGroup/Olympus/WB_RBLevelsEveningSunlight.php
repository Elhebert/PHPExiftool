<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevelsEveningSunlight extends AbstractTagGroup
{
    protected string $id = 'Olympus:WB_RBLevelsEveningSunlight';

    protected string $name = 'WB_RBLevelsEveningSunlight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RB Levels Evening Sunlight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::RawInfo
             * line : 180207
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Olympus::RawInfo.Olympus:WB_RBLevelsEveningSunlight',
            'desc' => [
                'en' => 'WB RB Levels Evening Sunlight',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
