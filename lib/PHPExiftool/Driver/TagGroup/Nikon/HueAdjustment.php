<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HueAdjustment extends AbstractTagGroup
{
    protected string $id = 'Nikon:HueAdjustment';

    protected string $name = 'HueAdjustment';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hue Adjustment',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 133164
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::Main.Nikon:HueAdjustment',
            'desc' => [
                'en' => 'Hue Adjustment',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::PictureControl
             * line : 137373
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::PictureControl.Nikon:HueAdjustment',
            'desc' => [
                'en' => 'Hue Adjustment',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
