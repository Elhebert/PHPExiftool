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
class CreativeStyle extends AbstractTagGroup
{
    protected string $id = 'Sony:CreativeStyle';

    protected string $name = 'CreativeStyle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Creative Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243230
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:CreativeStyle',
            'desc' => [
                'en' => 'Creative Style',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243937
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:CreativeStyle',
            'desc' => [
                'en' => 'Creative Style',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246555
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:CreativeStyle',
            'desc' => [
                'en' => 'Creative Style',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Main
             * line : 248689
             * type : string
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:CreativeStyle',
            'desc' => [
                'en' => 'Creative Style',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273966
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:CreativeStyle',
            'desc' => [
                'en' => 'Creative Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
