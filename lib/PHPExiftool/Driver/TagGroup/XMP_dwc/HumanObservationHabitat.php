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
class HumanObservationHabitat extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:HumanObservationHabitat';

    protected string $name = 'HumanObservationHabitat';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Human Observation Habitat',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78599
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:HumanObservationHabitat',
            'desc' => [
                'en' => 'Human Observation Habitat',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
