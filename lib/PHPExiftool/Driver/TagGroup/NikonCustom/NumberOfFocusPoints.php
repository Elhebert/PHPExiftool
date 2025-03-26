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
class NumberOfFocusPoints extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:NumberOfFocusPoints';

    protected string $name = 'NumberOfFocusPoints';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Number Of Focus Points',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146000
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:NumberOfFocusPoints',
            'desc' => [
                'en' => 'Number Of Focus Points',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148032
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:NumberOfFocusPoints',
            'desc' => [
                'en' => 'Number Of Focus Points',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150578
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:NumberOfFocusPoints',
            'desc' => [
                'en' => 'Number Of Focus Points',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD610
             * line : 150962
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD610.NikonCustom:NumberOfFocusPoints',
            'desc' => [
                'en' => 'Number Of Focus Points',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 152433
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:NumberOfFocusPoints',
            'desc' => [
                'en' => 'Number Of Focus Points',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
