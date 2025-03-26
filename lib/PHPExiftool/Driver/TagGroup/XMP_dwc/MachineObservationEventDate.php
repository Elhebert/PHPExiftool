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
class MachineObservationEventDate extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:MachineObservationEventDate';

    protected string $name = 'MachineObservationEventDate';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Machine Observation Event Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78677
             * type : date
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:MachineObservationEventDate',
            'desc' => [
                'en' => 'Machine Observation Event Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
