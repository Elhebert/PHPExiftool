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
class LongExposureNoiseReduction extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:LongExposureNoiseReduction';

    protected string $name = 'LongExposureNoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Long Exposure Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54195
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55750
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 55994
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56252
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56373
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56533
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56779
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:LongExposureNoiseReduction',
            'desc' => [
                'en' => 'Long Exposure Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
