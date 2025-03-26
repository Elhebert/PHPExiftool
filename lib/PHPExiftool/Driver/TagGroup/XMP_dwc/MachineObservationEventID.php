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
class MachineObservationEventID extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:MachineObservationEventID';

    protected string $name = 'MachineObservationEventID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Machine Observation Event ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78680
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:MachineObservationEventID',
            'desc' => [
                'en' => 'Machine Observation Event ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
