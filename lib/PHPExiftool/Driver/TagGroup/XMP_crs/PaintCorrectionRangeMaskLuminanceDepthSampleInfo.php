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
class PaintCorrectionRangeMaskLuminanceDepthSampleInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionRangeMaskLuminanceDepthSampleInfo';

    protected string $name = 'PaintCorrectionRangeMaskLuminanceDepthSampleInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Range Mask Luminance Depth Sample Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286883
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMaskLuminanceDepthSampleInfo',
            'desc' => [
                'en' => 'Paint Correction Range Mask Luminance Depth Sample Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
