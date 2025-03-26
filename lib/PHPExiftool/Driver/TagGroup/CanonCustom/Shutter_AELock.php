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
class Shutter_AELock extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:Shutter-AELock';

    protected string $name = 'Shutter-AELock';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Shutter-AE Lock',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53242
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55017
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 55034
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55772
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56019
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56274
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56398
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56558
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56790
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:Shutter-AELock',
            'desc' => [
                'en' => 'Shutter-AE Lock',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
