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
class GradientBasedCorrRangeMaskType extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:GradientBasedCorrRangeMaskType';

    protected string $name = 'GradientBasedCorrRangeMaskType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Range Mask Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285771
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:GradientBasedCorrRangeMaskType',
            'desc' => [
                'en' => 'Gradient Based Corr Range Mask Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
