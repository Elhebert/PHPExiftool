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
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 342797
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 343139
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 347745
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 349137
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 349839
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 352319
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 353099
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 359854
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Sony::Tag2010a
             * line : 362661
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010a.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Sony::Tag2010b
             * line : 363659
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010b.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sony::Tag2010c
             * line : 364682
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010c.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sony::Tag2010d
             * line : 365648
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010d.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Tag2010e
             * line : 366667
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010e.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Tag2010f
             * line : 369674
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010f.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        14 => [
            /**
             * table_name : Sony::Tag2010g
             * line : 370704
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010g.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        15 => [
            /**
             * table_name : Sony::Tag2010h
             * line : 373705
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010h.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        16 => [
            /**
             * table_name : Sony::Tag2010i
             * line : 376706
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag2010i.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        17 => [
            /**
             * table_name : Sony::Tag9404a
             * line : 384825
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404a.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        18 => [
            /**
             * table_name : Sony::Tag9404b
             * line : 385079
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404b.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        19 => [
            /**
             * table_name : Sony::Tag9404c
             * line : 385336
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9404c.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        20 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 387874
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
        21 => [
            /**
             * table_name : Sony::Tag9416
             * line : 391070
             * type : int8u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9416.Sony:ExposureProgram',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
