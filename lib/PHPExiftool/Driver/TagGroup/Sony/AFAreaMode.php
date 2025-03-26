<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Sony:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::AFInfo
             * line : 238890
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::AFInfo
             * line : 240009
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::AFInfo.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243115
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243851
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244846
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Main
             * line : 250437
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        6 => [
            /**
             * table_name : Sony::Main
             * line : 250469
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
        7 => [
            /**
             * table_name : Sony::Tag9402
             * line : 271293
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9402.Sony:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
