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
class Func1ButtonPlusDials extends AbstractTagGroup
{
    protected string $id = 'NikonCustom:Func1ButtonPlusDials';

    protected string $name = 'Func1ButtonPlusDials';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Func 1 Button Plus Dials',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCustom::SettingsD5
             * line : 146983
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD5.NikonCustom:Func1ButtonPlusDials',
            'desc' => [
                'en' => 'Func 1 Button Plus Dials',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCustom::SettingsD500
             * line : 149014
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD500.NikonCustom:Func1ButtonPlusDials',
            'desc' => [
                'en' => 'Func 1 Button Plus Dials',
            ],
        ],
        2 => [
            /**
             * table_name : NikonCustom::SettingsD850
             * line : 156832
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCustom::SettingsD850.NikonCustom:Func1ButtonPlusDials',
            'desc' => [
                'en' => 'Func 1 Button Plus Dials',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
