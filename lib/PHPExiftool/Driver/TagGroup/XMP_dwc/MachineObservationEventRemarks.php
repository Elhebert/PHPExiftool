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
class MachineObservationEventRemarks extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:MachineObservationEventRemarks';

    protected string $name = 'MachineObservationEventRemarks';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Machine Observation Event Remarks',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78683
             * type : lang-alt
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:MachineObservationEventRemarks',
            'desc' => [
                'en' => 'Machine Observation Event Remarks',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
