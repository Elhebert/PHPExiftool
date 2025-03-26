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
class AFPointSelectionMethod extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AFPointSelectionMethod';

    protected string $name = 'AFPointSelectionMethod';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 74120
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AFPointSelectionMethod',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 74149
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:AFPointSelectionMethod',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 76028
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:AFPointSelectionMethod',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 76549
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:AFPointSelectionMethod',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 77667
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:AFPointSelectionMethod',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
