<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ZoneMatchingOn extends AbstractTagGroup
{
    protected string $id = 'Minolta:ZoneMatchingOn';

    protected string $name = 'ZoneMatchingOn';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Zone Matching On',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122878
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:ZoneMatchingOn',
            'desc' => [
                'en' => 'Zone Matching On',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
