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
class GradientBasedCorrMaskRangeAreaModels extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:GradientBasedCorrMaskRangeAreaModels';

    protected string $name = 'GradientBasedCorrMaskRangeAreaModels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Mask Range Area Models',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282504
             * type : struct
             * writable : true
             * count :
             * flags : avoid,flattened,list,seq
             */
            'id' => 'XMP::crd.XMP-crd:GradientBasedCorrMaskRangeAreaModels',
            'desc' => [
                'en' => 'Gradient Based Corr Mask Range Area Models',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2625;
}
