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
class EarliestPeriodOrLowestSystem extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:EarliestPeriodOrLowestSystem';

    protected string $name = 'EarliestPeriodOrLowestSystem';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Earliest Period Or Lowest System',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78530
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:EarliestPeriodOrLowestSystem',
            'desc' => [
                'en' => 'Earliest Period Or Lowest System',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
