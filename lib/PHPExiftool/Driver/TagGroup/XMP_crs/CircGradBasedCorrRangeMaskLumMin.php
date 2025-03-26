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
class CircGradBasedCorrRangeMaskLumMin extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrRangeMaskLumMin';

    protected string $name = 'CircGradBasedCorrRangeMaskLumMin';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Range Mask Lum Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285158
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrRangeMaskLumMin',
            'desc' => [
                'en' => 'Circ Grad Based Corr Range Mask Lum Min',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
