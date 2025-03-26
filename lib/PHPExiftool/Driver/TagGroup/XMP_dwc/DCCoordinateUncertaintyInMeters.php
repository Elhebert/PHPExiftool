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
class DCCoordinateUncertaintyInMeters extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:DCCoordinateUncertaintyInMeters';

    protected string $name = 'DCCoordinateUncertaintyInMeters';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DC Coordinate Uncertainty In Meters',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 79043
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:DCCoordinateUncertaintyInMeters',
            'desc' => [
                'en' => 'DC Coordinate Uncertainty In Meters',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
