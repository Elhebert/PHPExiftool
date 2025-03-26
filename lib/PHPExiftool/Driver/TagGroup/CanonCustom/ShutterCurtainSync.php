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
        'en' => 'Shutter Curtain Sync',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53423
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53685
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54287
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55914
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56161
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56338
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56462
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56697
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56874
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:ShutterCurtainSync',
            'desc' => [
                'en' => 'Shutter Curtain Sync',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
