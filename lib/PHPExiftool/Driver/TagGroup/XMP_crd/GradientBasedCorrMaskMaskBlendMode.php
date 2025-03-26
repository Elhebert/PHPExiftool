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
class GradientBasedCorrMaskMaskBlendMode extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:GradientBasedCorrMaskMaskBlendMode';

    protected string $name = 'GradientBasedCorrMaskMaskBlendMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Mask Mask Blend Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282579
             * type : integer
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:GradientBasedCorrMaskMaskBlendMode',
            'desc' => [
                'en' => 'Gradient Based Corr Mask Mask Blend Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
