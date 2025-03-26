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
class InternalFlash extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:InternalFlash';

    protected string $name = 'InternalFlash';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Internal Flash',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 143852
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145903
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 150207
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD5200
             * line : 150922
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5200.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153848
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 158355
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:InternalFlash',
            'desc' => [
                'en' => 'Internal Flash',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
