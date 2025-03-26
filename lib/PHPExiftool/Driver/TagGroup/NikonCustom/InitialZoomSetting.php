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
class InitialZoomSetting extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:InitialZoomSetting';

    protected string $name = 'InitialZoomSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Initial Zoom Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142782
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:InitialZoomSetting',
            'desc' => [
                'en' => 'Initial Zoom Setting',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD3
             * line : 142796
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD3.NikonCustom:InitialZoomSetting',
            'desc' => [
                'en' => 'Initial Zoom Setting',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD700
             * line : 152065
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD700.NikonCustom:InitialZoomSetting',
            'desc' => [
                'en' => 'Initial Zoom Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
