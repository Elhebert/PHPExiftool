<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WB_RGGBLevels extends AbstractTagGroup
{
    protected string $id = 'Composite:WB_RGGBLevels';

    protected string $name = 'WB_RGGBLevels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'WB RGGB Levels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 65137
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:WB_RGGBLevels',
            'desc' => [
                'en' => 'WB RGGB Levels',
            ],
        ],
        1 => [
            /**
             * table_name : Composite
             * line : 67898
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:WB_RGGBLevels',
            'desc' => [
                'en' => 'WB RGGB Levels',
            ],
        ],
    ];

    protected int $count = 0;
}
