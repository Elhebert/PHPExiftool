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
class CustomWB_RGBLevels extends AbstractTagGroup
{
    protected string $id = 'Sony:CustomWB_RGBLevels';

    protected string $name = 'CustomWB_RGBLevels';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Custom WB RGB Levels',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::CameraSettings2
             * line : 243790
             * type : int16u
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings2.Sony:CustomWB_RGBLevels',
            'desc' => [
                'en' => 'Custom WB RGB Levels',
            ],
        ],
        1 => [
            /**
             * table_name : Sony::CameraSettings3
             * line : 244806
             * type : int16uRev
             * writable : true
             * count : 3
             * flags : permanent
             */
            'id' => 'Sony::CameraSettings3.Sony:CustomWB_RGBLevels',
            'desc' => [
                'en' => 'Custom WB RGB Levels',
            ],
        ],
    ];

    protected int $count = 3;

    protected int $flags = 2052;
}
