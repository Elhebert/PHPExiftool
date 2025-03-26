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
class LatestPeriodOrHighestSystem extends AbstractTagGroup
{
    protected string $id = 'XMP-dwc:LatestPeriodOrHighestSystem';

    protected string $name = 'LatestPeriodOrHighestSystem';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Latest Period Or Highest System',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DarwinCore::Main
             * line : 78557
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'DarwinCore::Main.XMP-dwc:LatestPeriodOrHighestSystem',
            'desc' => [
                'en' => 'Latest Period Or Highest System',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
