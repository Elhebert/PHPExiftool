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
class OccurrenceAssociatedSequences extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:OccurrenceAssociatedSequences';

    protected string $name = 'OccurrenceAssociatedSequences';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Occurrence Associated Sequences',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78776
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:OccurrenceAssociatedSequences',
            'desc' => [
                'en' => 'Occurrence Associated Sequences',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
