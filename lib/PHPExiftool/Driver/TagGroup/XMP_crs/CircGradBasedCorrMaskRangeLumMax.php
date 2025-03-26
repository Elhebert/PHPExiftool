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
class CircGradBasedCorrMaskRangeLumMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrMaskRangeLumMax';

    protected string $name = 'CircGradBasedCorrMaskRangeLumMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Range Lum Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284879
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskRangeLumMax',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Range Lum Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
