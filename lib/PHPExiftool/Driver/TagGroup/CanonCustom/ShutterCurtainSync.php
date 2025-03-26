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
class ShutterCurtainSync extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ShutterCurtainSync';

    protected string $name = 'ShutterCurtainSync';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 71772
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 72237
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 73366
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 76077
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 76598
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 76966
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 77232
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 77716
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 78086
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:ShutterCurtainSync',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
