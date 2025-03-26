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
class GradientBasedCorrRangeMaskInvert extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskInvert';

    protected string $name = 'GradientBasedCorrRangeMaskInvert';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Range Mask Invert',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285750
             * type : boolean
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskInvert',
            'desc' => [
                'en' => 'Gradient Based Corr Range Mask Invert',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
