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
class GPSLongitude extends AbstractTagGroup
{
    protected string $id = 'QuickTime:GPSLongitude';

    protected string $name = 'GPSLongitude';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::GPS360Fly
             * line : 313147
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::GPS360Fly.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::RVMI_gReV
             * line : 324298
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::RVMI_gReV.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Stream
             * line : 324647
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Stream.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::camm5
             * line : 326370
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm5.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : QuickTime::camm6
             * line : 326495
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::camm6.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : QuickTime::tx3g
             * line : 326804
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::tx3g.QuickTime:GPSLongitude',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
