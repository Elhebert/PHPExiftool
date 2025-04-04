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
class MaskGroupBasedCorrRangeMaskLumRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrRangeMaskLumRange';

    protected string $name = 'MaskGroupBasedCorrRangeMaskLumRange';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Range Mask Lum Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286437
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrRangeMaskLumRange',
            'desc' => [
                'en' => 'Mask Group Based Corr Range Mask Lum Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
