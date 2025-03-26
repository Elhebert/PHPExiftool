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
class ManualFlashOutput extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ManualFlashOutput';

    protected string $name = 'ManualFlashOutput';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Manual Flash Output',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145914
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150218
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150560
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150933
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151940
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153307
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153865
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154138
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158372
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
