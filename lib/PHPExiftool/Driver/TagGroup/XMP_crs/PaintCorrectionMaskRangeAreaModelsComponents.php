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
class PaintCorrectionMaskRangeAreaModelsComponents extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionMaskRangeAreaModelsComponents';

    protected string $name = 'PaintCorrectionMaskRangeAreaModelsComponents';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Range Area Models Components',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286583
             * type : string
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionMaskRangeAreaModelsComponents',
            'desc' => [
                'en' => 'Paint Correction Mask Range Area Models Components',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
