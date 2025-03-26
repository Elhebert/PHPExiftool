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
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 242943
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243723
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251454
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251466
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251487
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::PMP
             * line : 251776
             * type : int16s
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::PMP.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273695
             * type : rational32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9416
             * line : 276778
             * type : rational32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::rtmd
             * line : 278995
             * type : rational64u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Sony::rtmd.Sony:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
