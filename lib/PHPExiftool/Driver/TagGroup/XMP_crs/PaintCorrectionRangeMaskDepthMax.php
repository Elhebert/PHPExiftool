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
class PaintCorrectionRangeMaskDepthMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionRangeMaskDepthMax';

    protected string $name = 'PaintCorrectionRangeMaskDepthMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Range Mask Depth Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286871
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMaskDepthMax',
            'desc' => [
                'en' => 'Paint Correction Range Mask Depth Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
