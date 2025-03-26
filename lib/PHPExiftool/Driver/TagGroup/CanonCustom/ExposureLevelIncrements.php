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
class ExposureLevelIncrements extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ExposureLevelIncrements';

    protected string $name = 'ExposureLevelIncrements';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Level Increments',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53276
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53550
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53793
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53807
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55803
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56050
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56305
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56429
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56586
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
        9 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56818
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:ExposureLevelIncrements',
            'desc' => [
                'en' => 'Exposure Level Increments',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
