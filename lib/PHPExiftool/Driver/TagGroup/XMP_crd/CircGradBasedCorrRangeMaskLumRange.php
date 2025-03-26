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
class CircGradBasedCorrRangeMaskLumRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircGradBasedCorrRangeMaskLumRange';

    protected string $name = 'CircGradBasedCorrRangeMaskLumRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Range Mask Lum Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282212
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrRangeMaskLumRange',
            'desc' => [
                'en' => 'Circ Grad Based Corr Range Mask Lum Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
