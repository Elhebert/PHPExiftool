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
class CircGradBasedCorrMaskMidpoint extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircGradBasedCorrMaskMidpoint';

    protected string $name = 'CircGradBasedCorrMaskMidpoint';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Midpoint',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282119
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrMaskMidpoint',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Midpoint',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
