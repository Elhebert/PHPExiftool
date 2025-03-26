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
class PaintCorrectionMaskRangeLumFeather extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionMaskRangeLumFeather';

    protected string $name = 'PaintCorrectionMaskRangeLumFeather';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Range Lum Feather',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286604
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionMaskRangeLumFeather',
            'desc' => [
                'en' => 'Paint Correction Mask Range Lum Feather',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
