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
class PaintCorrectionRangeMaskInvert extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionRangeMaskInvert';

    protected string $name = 'PaintCorrectionRangeMaskInvert';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Range Mask Invert',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286877
             * type : boolean
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionRangeMaskInvert',
            'desc' => [
                'en' => 'Paint Correction Range Mask Invert',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
