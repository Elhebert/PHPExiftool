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
class CircGradBasedCorrMaskRangeAreaModels extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrMaskRangeAreaModels';

    protected string $name = 'CircGradBasedCorrMaskRangeAreaModels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Range Area Models',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284849
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskRangeAreaModels',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Range Area Models',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
