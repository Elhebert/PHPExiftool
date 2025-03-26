<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevelsDaylight extends AbstractTagGroup
{
    protected string $id = 'Pentax:WB_RGGBLevelsDaylight';

    protected string $name = 'WB_RGGBLevelsDaylight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RGGB Levels Daylight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::Main
             * line : 209643
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::WBLevels
             * line : 210706
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Pentax::WBLevels.Pentax:WB_RGGBLevelsDaylight',
            'desc' => [
                'en' => 'WB RGGB Levels Daylight',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
