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
class FlashExposureCompArea extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:FlashExposureCompArea';

    protected string $name = 'FlashExposureCompArea';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Exposure Comp Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145004
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146921
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148952
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD810
             * line : 155380
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD810.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
        4 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156770
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
        5 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159078
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:FlashExposureCompArea',
            'desc' => [
                'en' => 'Flash Exposure Comp Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
