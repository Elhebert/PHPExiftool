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
class FocusingScreen extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:FocusingScreen';

    protected string $name = 'FocusingScreen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focusing Screen',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53472
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55500
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55514
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55528
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55542
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55553
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55564
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56499
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:FocusingScreen',
            'desc' => [
                'en' => 'Focusing Screen',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
