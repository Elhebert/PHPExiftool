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
class PaintCorrectionMaskMasksCenterValue extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionMaskMasksCenterValue';

    protected string $name = 'PaintCorrectionMaskMasksCenterValue';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Masks Center Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286679
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionMaskMasksCenterValue',
            'desc' => [
                'en' => 'Paint Correction Mask Masks Center Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
