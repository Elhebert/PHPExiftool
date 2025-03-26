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
class DCCoordinatePrecision extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:DCCoordinatePrecision';

    protected string $name = 'DCCoordinatePrecision';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'DC Coordinate Precision',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 79040
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:DCCoordinatePrecision',
            'desc' => [
                'en' => 'DC Coordinate Precision',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
