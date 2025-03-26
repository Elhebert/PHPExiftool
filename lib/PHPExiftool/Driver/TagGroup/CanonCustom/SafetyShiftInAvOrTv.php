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
class SafetyShiftInAvOrTv extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:SafetyShiftInAvOrTv';

    protected string $name = 'SafetyShiftInAvOrTv';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Safety Shift In Av Or Tv',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53434
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:SafetyShiftInAvOrTv',
            'desc' => [
                'en' => 'Safety Shift In Av Or Tv',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53696
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:SafetyShiftInAvOrTv',
            'desc' => [
                'en' => 'Safety Shift In Av Or Tv',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55925
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:SafetyShiftInAvOrTv',
            'desc' => [
                'en' => 'Safety Shift In Av Or Tv',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56172
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:SafetyShiftInAvOrTv',
            'desc' => [
                'en' => 'Safety Shift In Av Or Tv',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56708
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:SafetyShiftInAvOrTv',
            'desc' => [
                'en' => 'Safety Shift In Av Or Tv',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
