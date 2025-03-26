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
class AFAreaModeSetting extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:AFAreaModeSetting';

    protected string $name = 'AFAreaModeSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD40
             * line : 145937
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD40.NikonCustom:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5000
             * line : 149884
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5000.NikonCustom:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD80
             * line : 153982
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD80.NikonCustom:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD90
             * line : 157743
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD90.NikonCustom:AFAreaModeSetting',
            'desc' => [
                'en' => 'AF Area Mode Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
