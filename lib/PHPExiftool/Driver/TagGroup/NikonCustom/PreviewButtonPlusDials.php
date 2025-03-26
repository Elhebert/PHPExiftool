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
class PreviewButtonPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:PreviewButtonPlusDials';

    protected string $name = 'PreviewButtonPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Button Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143119
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143300
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144579
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147012
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149043
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152290
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155477
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156861
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:PreviewButtonPlusDials',
            'desc' => [
                'en' => 'Preview Button Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
