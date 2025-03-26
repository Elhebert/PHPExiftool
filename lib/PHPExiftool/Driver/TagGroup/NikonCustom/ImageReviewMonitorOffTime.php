<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ImageReviewMonitorOffTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ImageReviewMonitorOffTime';

    protected string $name = 'ImageReviewMonitorOffTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Review Monitor Off Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144758
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146675
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148706
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151194
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155114
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156524
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 158862
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ImageReviewMonitorOffTime',
            'desc' => [
                'en' => 'Image Review Monitor Off Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
