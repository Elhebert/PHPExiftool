<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crs;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HueAdjustmentGreen extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:HueAdjustmentGreen';

    protected string $name = 'HueAdjustmentGreen';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Hue Adjustment Green',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285918
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:HueAdjustmentGreen',
            'desc' => [
                'en' => 'Hue Adjustment Green',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
