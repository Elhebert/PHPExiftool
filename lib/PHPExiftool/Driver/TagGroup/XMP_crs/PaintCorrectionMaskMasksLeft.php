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
class PaintCorrectionMaskMasksLeft extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionMaskMasksLeft';

    protected string $name = 'PaintCorrectionMaskMasksLeft';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Masks Left',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286706
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionMaskMasksLeft',
            'desc' => [
                'en' => 'Paint Correction Mask Masks Left',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
