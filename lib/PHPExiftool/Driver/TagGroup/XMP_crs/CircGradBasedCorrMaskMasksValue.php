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
class CircGradBasedCorrMaskMasksValue extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrMaskMasksValue';

    protected string $name = 'CircGradBasedCorrMaskMasksValue';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Masks Value',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284999
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskMasksValue',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Masks Value',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
