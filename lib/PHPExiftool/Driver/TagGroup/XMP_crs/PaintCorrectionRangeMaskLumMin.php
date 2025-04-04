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
class PaintCorrectionRangeMaskLumMin extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionRangeMaskLumMin';

    protected string $name = 'PaintCorrectionRangeMaskLumMin';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Range Mask Lum Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286889
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMaskLumMin',
            'desc' => [
                'en' => 'Paint Correction Range Mask Lum Min',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
