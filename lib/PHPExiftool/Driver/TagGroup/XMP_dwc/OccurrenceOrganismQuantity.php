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
class OccurrenceOrganismQuantity extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:OccurrenceOrganismQuantity';

    protected string $name = 'OccurrenceOrganismQuantity';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Occurrence Organism Quantity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78815
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:OccurrenceOrganismQuantity',
            'desc' => [
                'en' => 'Occurrence Organism Quantity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
