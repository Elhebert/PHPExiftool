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
class GPSLatitude extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSLatitude';

    protected string $name = 'GPSLatitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 313129
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::RVMI_gReV
             * line : 324280
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Stream
             * line : 324629
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::camm5
             * line : 326352
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm5.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::camm6
             * line : 326477
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 326786
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:GPSLatitude',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
