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
class GPSSpeed extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSSpeed';

    protected string $name = 'GPSSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 313183
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSSpeed',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::RVMI_gReV
             * line : 324316
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSSpeed',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Stream
             * line : 324683
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSSpeed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
