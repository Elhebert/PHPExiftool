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
class DigitalDEEShadowAdj extends AbstractTagGroup
{
    protected string $id = 'NikonScan:DigitalDEEShadowAdj';

    protected string $name = 'DigitalDEEShadowAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital DEE Shadow Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Scan
             * line : 137972
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Scan.NikonScan:DigitalDEEShadowAdj',
            'desc' => [
                'en' => 'Digital DEE Shadow Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
