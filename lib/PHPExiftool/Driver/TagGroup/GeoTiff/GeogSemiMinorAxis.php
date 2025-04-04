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
class GeogSemiMinorAxis extends AbstractTagGroup
{
    protected string $id = 'GeoTiff:GeogSemiMinorAxis';

    protected string $name = 'GeogSemiMinorAxis';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Geog Semi Minor Axis',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GeoTiff::Main
             * line : 92401
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GeoTiff::Main.GeoTiff:GeogSemiMinorAxis',
            'desc' => [
                'en' => 'Geog Semi Minor Axis',
            ],
        ],
    ];

    protected int $count = 0;
}
