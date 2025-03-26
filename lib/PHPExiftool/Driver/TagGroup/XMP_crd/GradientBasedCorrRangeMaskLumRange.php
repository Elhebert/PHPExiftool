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
class GradientBasedCorrRangeMaskLumRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:GradientBasedCorrRangeMaskLumRange';

    protected string $name = 'GradientBasedCorrRangeMaskLumRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Range Mask Lum Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282816
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:GradientBasedCorrRangeMaskLumRange',
            'desc' => [
                'en' => 'Gradient Based Corr Range Mask Lum Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
