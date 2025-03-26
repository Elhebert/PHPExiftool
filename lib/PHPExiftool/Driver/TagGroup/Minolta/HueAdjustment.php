<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HueAdjustment extends AbstractTagGroup
{
    protected string $id = 'Minolta:HueAdjustment';

    protected string $name = 'HueAdjustment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hue Adjustment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::CameraSettings5D
             * line : 122496
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings5D.Minolta:HueAdjustment',
            'desc' => [
                'en' => 'Hue Adjustment',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::CameraSettings7D
             * line : 122824
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Minolta::CameraSettings7D.Minolta:HueAdjustment',
            'desc' => [
                'en' => 'Hue Adjustment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
