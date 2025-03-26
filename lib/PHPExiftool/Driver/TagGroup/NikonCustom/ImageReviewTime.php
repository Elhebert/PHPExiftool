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
class ImageReviewTime extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ImageReviewTime';

    protected string $name = 'ImageReviewTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Image Review Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143869
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145724
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150167
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150497
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150862
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151707
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153125
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158245
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ImageReviewTime',
            'desc' => [
                'en' => 'Image Review Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
