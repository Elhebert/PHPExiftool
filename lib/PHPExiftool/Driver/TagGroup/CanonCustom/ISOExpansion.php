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
class ISOExpansion extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:ISOExpansion';

    protected string $name = 'ISOExpansion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Expansion',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 53840
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:ISOExpansion',
            'desc' => [
                'en' => 'ISO Expansion',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55825
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:ISOExpansion',
            'desc' => [
                'en' => 'ISO Expansion',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56072
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:ISOExpansion',
            'desc' => [
                'en' => 'ISO Expansion',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56608
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:ISOExpansion',
            'desc' => [
                'en' => 'ISO Expansion',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
