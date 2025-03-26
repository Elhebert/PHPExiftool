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
class WB_RGBLevels extends AbstractTagGroup
{
    protected string $id = 'Minolta:WB_RGBLevels';

    protected string $name = 'WB_RGBLevels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 185492
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_RGBLevels',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 185624
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_RGBLevels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
