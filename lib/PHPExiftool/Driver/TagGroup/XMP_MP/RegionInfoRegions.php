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
class RegionInfoRegions extends AbstractTagGroup
{
    protected string $id = 'XMP-MP:RegionInfoRegions';

    protected string $name = 'RegionInfoRegions';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Microsoft::MP
             * line : 174072
             * type : struct
             * writable : true
             * count :
             * flags : bag,flattened,list
             */
            'id' => 'Microsoft::MP.XMP-MP:RegionInfoRegions',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2368;
}
