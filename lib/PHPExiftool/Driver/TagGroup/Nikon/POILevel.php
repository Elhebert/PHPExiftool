<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class POILevel extends AbstractTagGroup
{
    protected string $id = 'Nikon:POILevel';

    protected string $name = 'POILevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'POI Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::LocationInfo
             * line : 132775
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::LocationInfo.Nikon:POILevel',
            'desc' => [
                'en' => 'POI Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
