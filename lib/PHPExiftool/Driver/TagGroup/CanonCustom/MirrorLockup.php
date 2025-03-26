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
class MirrorLockup extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:MirrorLockup';

    protected string $name = 'MirrorLockup';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mirror Lockup',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53381
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions1D
             * line : 53646
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions1D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54953
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55878
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56125
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56316
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56440
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56661
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56807
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:MirrorLockup',
            'desc' => [
                'en' => 'Mirror Lockup',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
