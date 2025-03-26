<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Sony:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 346653
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 348338
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360836
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360890
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 360956
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::PMP
             * line : 361468
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387590
             * type : rational32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391043
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ExposureTime',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::rtmd
             * line : 393461
             * type : rational64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Sony::rtmd.Sony:ExposureTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
