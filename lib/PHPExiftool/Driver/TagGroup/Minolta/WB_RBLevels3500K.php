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
class WB_RBLevels3500K extends AbstractTagGroup
{
    protected string $id = 'Minolta:WB_RBLevels3500K';

    protected string $name = 'WB_RBLevels3500K';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'WB RB Levels 3500K',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::WBInfoA100
             * line : 125922
             * type : int16u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Minolta::WBInfoA100.Minolta:WB_RBLevels3500K',
            'desc' => [
                'en' => 'WB RB Levels 3500K',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
