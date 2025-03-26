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
class PaintCorrectionMaskMasksWholeImageArea extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PaintCorrectionMaskMasksWholeImageArea';

    protected string $name = 'PaintCorrectionMaskMasksWholeImageArea';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Masks Whole Image Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283826
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskMasksWholeImageArea',
            'desc' => [
                'en' => 'Paint Correction Mask Masks Whole Image Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
