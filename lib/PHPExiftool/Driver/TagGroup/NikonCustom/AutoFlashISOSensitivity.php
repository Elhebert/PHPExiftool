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
class AutoFlashISOSensitivity extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AutoFlashISOSensitivity';

    protected string $name = 'AutoFlashISOSensitivity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto Flash ISO Sensitivity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146932
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:AutoFlashISOSensitivity',
            'desc' => [
                'en' => 'Auto Flash ISO Sensitivity',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 148963
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:AutoFlashISOSensitivity',
            'desc' => [
                'en' => 'Auto Flash ISO Sensitivity',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156781
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:AutoFlashISOSensitivity',
            'desc' => [
                'en' => 'Auto Flash ISO Sensitivity',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsZ9
             * line : 159089
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsZ9.NikonCustom:AutoFlashISOSensitivity',
            'desc' => [
                'en' => 'Auto Flash ISO Sensitivity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
