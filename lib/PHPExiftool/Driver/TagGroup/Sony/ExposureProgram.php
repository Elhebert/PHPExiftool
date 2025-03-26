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
class ExposureProgram extends AbstractTagGroup
{
    protected string $id = 'Sony:ExposureProgram';

    protected string $name = 'ExposureProgram';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Program',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 240040
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 240215
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243448
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 244046
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244396
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246102
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246508
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 250927
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 252533
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 253195
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 253866
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 254514
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 255182
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 257812
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 258477
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 261101
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 263725
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag9404a
             * line : 271348
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404a.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9404b
             * line : 271470
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404b.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        19 => [
            /**
             * table_name : Sony::Tag9404c
             * line : 271595
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404c.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        20 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273862
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
        21 => [
            /**
             * table_name : Sony::Tag9416
             * line : 276790
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ExposureProgram',
            'desc' => [
                'en' => 'Exposure Program',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
