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
class GPSDestBearing extends AbstractTagGroup
{
    protected string $id = 'GPS:GPSDestBearing';

    protected string $name = 'GPSDestBearing';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'GPS Dest Bearing',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GPS::Main
             * line : 90988
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'GPS::Main.GPS:GPSDestBearing',
            'desc' => [
                'en' => 'GPS Dest Bearing',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
