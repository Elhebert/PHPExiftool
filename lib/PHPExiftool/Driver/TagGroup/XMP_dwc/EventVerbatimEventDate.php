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
class EventVerbatimEventDate extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:EventVerbatimEventDate';

    protected string $name = 'EventVerbatimEventDate';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Event Verbatim Event Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78500
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:EventVerbatimEventDate',
            'desc' => [
                'en' => 'Event Verbatim Event Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
