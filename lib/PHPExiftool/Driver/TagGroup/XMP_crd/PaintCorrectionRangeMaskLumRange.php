<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PaintCorrectionRangeMaskLumRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PaintCorrectionRangeMaskLumRange';

    protected string $name = 'PaintCorrectionRangeMaskLumRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Range Mask Lum Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283943
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:PaintCorrectionRangeMaskLumRange',
            'desc' => [
                'en' => 'Paint Correction Range Mask Lum Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
