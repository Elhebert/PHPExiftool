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
class RepeatingFlashOutput extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:RepeatingFlashOutput';

    protected string $name = 'RepeatingFlashOutput';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Repeating Flash Output',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 151943
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:RepeatingFlashOutput',
            'desc' => [
                'en' => 'Repeating Flash Output',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153310
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:RepeatingFlashOutput',
            'desc' => [
                'en' => 'Repeating Flash Output',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153868
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:RepeatingFlashOutput',
            'desc' => [
                'en' => 'Repeating Flash Output',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154141
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:RepeatingFlashOutput',
            'desc' => [
                'en' => 'Repeating Flash Output',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158375
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:RepeatingFlashOutput',
            'desc' => [
                'en' => 'Repeating Flash Output',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
