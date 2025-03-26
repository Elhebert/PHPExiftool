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
class CircGradBasedCorrMaskRangeLumMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircGradBasedCorrMaskRangeLumMax';

    protected string $name = 'CircGradBasedCorrMaskRangeLumMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Range Lum Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 281930
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrMaskRangeLumMax',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Range Lum Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
