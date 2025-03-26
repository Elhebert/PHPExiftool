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
class SubSelectorCenter extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SubSelectorCenter';

    protected string $name = 'SubSelectorCenter';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sub Selector Center',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147480
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SubSelectorCenter',
            'desc' => [
                'en' => 'Sub Selector Center',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149522
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SubSelectorCenter',
            'desc' => [
                'en' => 'Sub Selector Center',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157347
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SubSelectorCenter',
            'desc' => [
                'en' => 'Sub Selector Center',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
