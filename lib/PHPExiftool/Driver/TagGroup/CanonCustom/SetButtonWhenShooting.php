<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SetButtonWhenShooting extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SetButtonWhenShooting';

    protected string $name = 'SetButtonWhenShooting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Set Button When Shooting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53200
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55122
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55148
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55171
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55194
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55217
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55237
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55260
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55265
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
        9 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56924
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:SetButtonWhenShooting',
            'desc' => [
                'en' => 'Set Button When Shooting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
