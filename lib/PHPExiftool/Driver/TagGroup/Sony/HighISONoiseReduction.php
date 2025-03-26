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
class HighISONoiseReduction extends AbstractTagGroup
{
    protected string $id = 'Sony:HighISONoiseReduction';

    protected string $name = 'HighISONoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'High ISO Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243364
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243997
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244874
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::Main
             * line : 246823
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251300
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
        5 => [
            /**
             * table_name : Sony::Tag9405b
             * line : 273787
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Tag9405b.Sony:HighISONoiseReduction',
            'desc' => [
                'en' => 'High ISO Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
