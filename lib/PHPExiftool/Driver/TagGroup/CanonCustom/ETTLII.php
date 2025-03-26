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
class ETTLII extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ETTLII';

    protected string $name = 'ETTLII';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'E-TTL II',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54276
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55903
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56150
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56327
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56451
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56686
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:ETTLII',
            'desc' => [
                'en' => 'E-TTL II',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
