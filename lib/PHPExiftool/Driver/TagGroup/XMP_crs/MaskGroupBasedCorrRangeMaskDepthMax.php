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
class MaskGroupBasedCorrRangeMaskDepthMax extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrRangeMaskDepthMax';

    protected string $name = 'MaskGroupBasedCorrRangeMaskDepthMax';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Range Mask Depth Max',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286416
             * type : real
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrRangeMaskDepthMax',
            'desc' => [
                'en' => 'Mask Group Based Corr Range Mask Depth Max',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
