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
class FlashSyncSpeedAv extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:FlashSyncSpeedAv';

    protected string $name = 'FlashSyncSpeedAv';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Sync Speed Av',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53231
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        1 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54039
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        2 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54050
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        3 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54064
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        4 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54075
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        5 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54086
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        6 => [
            /**
             * table_name : CanonCustom::Functions2
             * line : 54100
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions2.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        7 => [
            /**
             * table_name : CanonCustom::Functions20D
             * line : 55761
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions20D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        8 => [
            /**
             * table_name : CanonCustom::Functions30D
             * line : 56008
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions30D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        9 => [
            /**
             * table_name : CanonCustom::Functions350D
             * line : 56263
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions350D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        10 => [
            /**
             * table_name : CanonCustom::Functions400D
             * line : 56387
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions400D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        11 => [
            /**
             * table_name : CanonCustom::Functions5D
             * line : 56547
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions5D.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
        12 => [
            /**
             * table_name : CanonCustom::FunctionsD30
             * line : 56846
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::FunctionsD30.CanonCustom:FlashSyncSpeedAv',
            'desc' => [
                'en' => 'Flash Sync Speed Av',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
