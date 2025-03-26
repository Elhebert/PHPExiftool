<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GPS;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDestLatitude extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSDestLatitude';

    protected string $name = 'GPSDestLatitude';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 132387
             * type : rational64u
             * writable : true
             * count : 3
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSDestLatitude',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2048;
}
