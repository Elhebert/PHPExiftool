<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonScan;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DigitalICE extends AbstractTagGroup
{
    protected string $id = 'NikonScan:DigitalICE';

    protected string $name = 'DigitalICE';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital ICE',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Scan
             * line : 137969
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Scan.NikonScan:DigitalICE',
            'desc' => [
                'en' => 'Digital ICE',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
