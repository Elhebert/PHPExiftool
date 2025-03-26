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
class DynamicRangeOptimizerLevel extends AbstractTagGroup
{
    protected string $id = 'Sony:DynamicRangeOptimizerLevel';

    protected string $name = 'DynamicRangeOptimizerLevel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Dynamic Range Optimizer Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings
             * line : 243227
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings.Sony:DynamicRangeOptimizerLevel',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Level',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243934
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:DynamicRangeOptimizerLevel',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Level',
            ],
        ],
        2 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244596
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:DynamicRangeOptimizerLevel',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Level',
            ],
        ],
        3 => [
            /**
             * table_name : Sony::FocusInfo
             * line : 246625
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::FocusInfo.Sony:DynamicRangeOptimizerLevel',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Level',
            ],
        ],
        4 => [
            /**
             * table_name : Sony::MoreSettings
             * line : 251056
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::MoreSettings.Sony:DynamicRangeOptimizerLevel',
            'desc' => [
                'en' => 'Dynamic Range Optimizer Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
