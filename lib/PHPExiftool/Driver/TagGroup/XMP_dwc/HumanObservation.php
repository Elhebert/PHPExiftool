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
class HumanObservation extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:HumanObservation';

    protected string $name = 'HumanObservation';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Human Observation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78569
             * type : struct
             * writable : true
             * count :
             * flags :
             */
            'id' => 'DarwinCore::Main.XMP-dwc:HumanObservation',
            'desc' => [
                'en' => 'Human Observation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
