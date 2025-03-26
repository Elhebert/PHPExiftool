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
class ISOSetting extends AbstractTagGroup
{
    protected string $id = 'Sony:ISOSetting';

    protected string $name = 'ISOSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243207
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243914
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244344
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246602
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::ISOInfo
             * line : 246641
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ISOInfo.Sony:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
