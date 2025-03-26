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
class PaintCorrectionMaskRight extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PaintCorrectionMaskRight';

    protected string $name = 'PaintCorrectionMaskRight';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Right',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283865
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskRight',
            'desc' => [
                'en' => 'Paint Correction Mask Right',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
