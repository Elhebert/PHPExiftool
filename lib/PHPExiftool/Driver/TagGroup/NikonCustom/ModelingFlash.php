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
class ModelingFlash extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ModelingFlash';

    protected string $name = 'ModelingFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Modeling Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143795
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144923
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146840
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148871
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152023
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD7000
             * line : 153339
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD7000.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        6 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153837
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        7 => [
            /**
             * table_name : NikonCustom::SettingsD800
             * line : 154210
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD800.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        8 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155299
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        9 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156689
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        10 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158398
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
        11 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159100
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ModelingFlash',
            'desc' => [
                'en' => 'Modeling Flash',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
