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
class PaintCorrectionHighlights2012 extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PaintCorrectionHighlights2012';

    protected string $name = 'PaintCorrectionHighlights2012';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Highlights 2012',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283988
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:PaintCorrectionHighlights2012',
            'desc' => [
                'en' => 'Paint Correction Highlights 2012',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
