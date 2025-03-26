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
class MaskGroupBasedCorrMaskRangeLuminanceDepthSampleInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskRangeLuminanceDepthSampleInfo';

    protected string $name = 'MaskGroupBasedCorrMaskRangeLuminanceDepthSampleInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Range Luminance Depth Sample Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283203
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskRangeLuminanceDepthSampleInfo',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Range Luminance Depth Sample Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
