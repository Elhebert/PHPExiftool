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
class DynamicRangeOptimizerMode extends AbstractTagGroup
{
    protected string $id = 'Sony:DynamicRangeOptimizerMode';

    protected string $name = 'DynamicRangeOptimizerMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Dynamic Range Optimizer Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243210
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:DynamicRangeOptimizerMode',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Mode',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243917
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:DynamicRangeOptimizerMode',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Mode',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246454
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerMode',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Mode',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246608
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerMode',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
