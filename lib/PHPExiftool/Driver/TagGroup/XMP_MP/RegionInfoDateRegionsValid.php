<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_MP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegionInfoDateRegionsValid extends AbstractTagGroup
{
    protected string $id = 'XMP-MP:RegionInfoDateRegionsValid';

    protected string $name = 'RegionInfoDateRegionsValid';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::MP
             * line : 174068
             * type : date
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'Microsoft::MP.XMP-MP:RegionInfoDateRegionsValid',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
