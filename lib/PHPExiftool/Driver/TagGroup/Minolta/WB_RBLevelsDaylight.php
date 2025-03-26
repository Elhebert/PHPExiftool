<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RBLevelsDaylight extends AbstractTagGroup
{
    protected string $id = 'Minolta:WB_RBLevelsDaylight';

    protected string $name = 'WB_RBLevelsDaylight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RB Levels Daylight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125898
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_RBLevelsDaylight',
            'desc' => [
                'en' => 'WB RB Levels Daylight',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125925
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_RBLevelsDaylight',
            'desc' => [
                'en' => 'WB RB Levels Daylight',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
