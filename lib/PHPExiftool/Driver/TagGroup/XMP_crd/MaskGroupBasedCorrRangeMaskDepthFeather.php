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
class MaskGroupBasedCorrRangeMaskDepthFeather extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrRangeMaskDepthFeather';

    protected string $name = 'MaskGroupBasedCorrRangeMaskDepthFeather';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Range Mask Depth Feather',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283464
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrRangeMaskDepthFeather',
            'desc' => [
                'en' => 'Mask Group Based Corr Range Mask Depth Feather',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
