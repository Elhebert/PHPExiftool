<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_dwc;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DCMinimumDistanceAboveSurfaceInMeters extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:DCMinimumDistanceAboveSurfaceInMeters';

    protected string $name = 'DCMinimumDistanceAboveSurfaceInMeters';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DC Minimum Distance Above Surface In Meters',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 79127
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:DCMinimumDistanceAboveSurfaceInMeters',
            'desc' => [
                'en' => 'DC Minimum Distance Above Surface In Meters',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
