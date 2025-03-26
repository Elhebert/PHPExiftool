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
class RemoteOnDuration extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:RemoteOnDuration';

    protected string $name = 'RemoteOnDuration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Remote On Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145801
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150130
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5100
             * line : 150460
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5100.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150825
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 151140
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153071
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153688
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158185
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:RemoteOnDuration',
            'desc' => [
                'en' => 'Remote On Duration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
