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
class OccurrenceAssociatedOccurrences extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:OccurrenceAssociatedOccurrences';

    protected string $name = 'OccurrenceAssociatedOccurrences';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Occurrence Associated Occurrences',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78770
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:OccurrenceAssociatedOccurrences',
            'desc' => [
                'en' => 'Occurrence Associated Occurrences',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
