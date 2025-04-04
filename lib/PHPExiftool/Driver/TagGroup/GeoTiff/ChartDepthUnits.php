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
class ChartDepthUnits extends AbstractTagGroup
{
    protected string $id = 'GeoTiff:ChartDepthUnits';

    protected string $name = 'ChartDepthUnits';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Chart Depth Units',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GeoTiff::Main
             * line : 97434
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GeoTiff::Main.GeoTiff:ChartDepthUnits',
            'desc' => [
                'en' => 'Chart Depth Units',
            ],
        ],
    ];

    protected int $count = 0;
}
