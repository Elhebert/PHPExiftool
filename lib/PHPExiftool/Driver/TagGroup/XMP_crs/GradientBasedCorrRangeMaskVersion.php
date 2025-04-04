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
class GradientBasedCorrRangeMaskVersion extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskVersion';

    protected string $name = 'GradientBasedCorrRangeMaskVersion';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Range Mask Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285774
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskVersion',
            'desc' => [
                'en' => 'Gradient Based Corr Range Mask Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
