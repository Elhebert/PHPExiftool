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
class LuminanceAdjustmentAqua extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:LuminanceAdjustmentAqua';

    protected string $name = 'LuminanceAdjustmentAqua';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Luminance Adjustment Aqua',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286062
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::crs.XMP-crs:LuminanceAdjustmentAqua',
            'desc' => [
                'en' => 'Luminance Adjustment Aqua',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
