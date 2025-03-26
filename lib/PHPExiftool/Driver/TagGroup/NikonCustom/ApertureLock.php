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
class ApertureLock extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:ApertureLock';

    protected string $name = 'ApertureLock';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Aperture Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 144979
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146899
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148930
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155358
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156748
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 160811
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:ApertureLock',
            'desc' => [
                'en' => 'Aperture Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
