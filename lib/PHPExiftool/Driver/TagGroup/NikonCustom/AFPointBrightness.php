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
class AFPointBrightness extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFPointBrightness';

    protected string $name = 'AFPointBrightness';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Point Brightness',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142478
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145236
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146036
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148068
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 154343
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 155868
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AFPointBrightness',
            'desc' => [
                'en' => 'AF Point Brightness',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
