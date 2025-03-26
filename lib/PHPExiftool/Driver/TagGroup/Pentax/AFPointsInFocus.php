<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTagGroup
{
    protected string $id = 'Pentax:AFPointsInFocus';

    protected string $name = 'AFPointsInFocus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Points In Focus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Pentax::AFInfo
             * line : 196706
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::AFInfo.Pentax:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        1 => [
            /**
             * table_name : Pentax::AFPointInfo
             * line : 196798
             * type : int8u
             * writable : false
             * count : 9
             * flags : permanent
             */
            'id' => 'Pentax::AFPointInfo.Pentax:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        2 => [
            /**
             * table_name : Pentax::Main
             * line : 207332
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        3 => [
            /**
             * table_name : Pentax::Main
             * line : 207421
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
        4 => [
            /**
             * table_name : Pentax::Main
             * line : 208834
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Pentax::Main.Pentax:AFPointsInFocus',
            'desc' => [
                'en' => 'AF Points In Focus',
            ],
        ],
    ];

    protected int $count = 9;

    protected int $flags = 2052;
}
