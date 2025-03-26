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
class PaintCorrectionMaskRangeAreaModelsColorSampleInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:PaintCorrectionMaskRangeAreaModelsColorSampleInfo';

    protected string $name = 'PaintCorrectionMaskRangeAreaModelsColorSampleInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Mask Range Area Models Color Sample Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283637
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:PaintCorrectionMaskRangeAreaModelsColorSampleInfo',
            'desc' => [
                'en' => 'Paint Correction Mask Range Area Models Color Sample Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
