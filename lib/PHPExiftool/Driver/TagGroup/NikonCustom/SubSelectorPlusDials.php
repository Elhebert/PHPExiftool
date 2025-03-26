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
class SubSelectorPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:SubSelectorPlusDials';

    protected string $name = 'SubSelectorPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sub Selector Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD4
             * line : 145422
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD4.NikonCustom:SubSelectorPlusDials',
            'desc' => [
                'en' => 'Sub Selector Plus Dials',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 147602
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:SubSelectorPlusDials',
            'desc' => [
                'en' => 'Sub Selector Plus Dials',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149644
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:SubSelectorPlusDials',
            'desc' => [
                'en' => 'Sub Selector Plus Dials',
            ],
        ],
        3 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 157475
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:SubSelectorPlusDials',
            'desc' => [
                'en' => 'Sub Selector Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
