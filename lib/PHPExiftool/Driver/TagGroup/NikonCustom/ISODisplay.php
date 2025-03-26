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
class ISODisplay extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ISODisplay';

    protected string $name = 'ISODisplay';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Display',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146050
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148082
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149937
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150289
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150625
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152579
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154415
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155882
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157872
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ISODisplay',
            'desc' => [
                'en' => 'ISO Display',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
