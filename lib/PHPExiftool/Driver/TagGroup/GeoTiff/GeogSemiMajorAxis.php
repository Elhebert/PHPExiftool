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
class GeogSemiMajorAxis extends AbstractTagGroup
{
    protected string $id = 'GeoTiff:GeogSemiMajorAxis';

    protected string $name = 'GeogSemiMajorAxis';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Geog Semi Major Axis',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GeoTiff::Main
             * line : 92398
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GeoTiff::Main.GeoTiff:GeogSemiMajorAxis',
            'desc' => [
                'en' => 'Geog Semi Major Axis',
            ],
        ],
    ];

    protected int $count = 0;
}
