<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GeoTiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProjLinearUnits extends AbstractTagGroup
{
    protected string $id = 'GeoTiff:ProjLinearUnits';

    protected string $name = 'ProjLinearUnits';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GeoTiff::Main
             * line : 138615
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GeoTiff::Main.GeoTiff:ProjLinearUnits',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
