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
class CircGradBasedCorrMaskRangeSampleType extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircGradBasedCorrMaskRangeSampleType';

    protected string $name = 'CircGradBasedCorrMaskRangeSampleType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Range Sample Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 281939
             * type : integer
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrMaskRangeSampleType',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Range Sample Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
