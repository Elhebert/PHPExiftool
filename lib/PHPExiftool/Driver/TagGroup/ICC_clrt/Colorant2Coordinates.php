<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_clrt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Colorant2Coordinates extends AbstractTagGroup
{
    protected string $id = 'ICC-clrt:Colorant2Coordinates';

    protected string $name = 'Colorant2Coordinates';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::ColorantTable
             * line : 143145
             * type : int16u
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'ICC_Profile::ColorantTable.ICC-clrt:Colorant2Coordinates',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;
}
