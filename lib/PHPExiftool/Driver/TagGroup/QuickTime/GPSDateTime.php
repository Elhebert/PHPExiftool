<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GPSDateTime extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSDateTime';

    protected string $name = 'GPSDateTime';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Stream
             * line : 324618
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSDateTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::camm6
             * line : 326410
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSDateTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
