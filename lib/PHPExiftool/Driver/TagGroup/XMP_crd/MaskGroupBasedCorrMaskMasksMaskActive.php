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
class MaskGroupBasedCorrMaskMasksMaskActive extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrMaskMasksMaskActive';

    protected string $name = 'MaskGroupBasedCorrMaskMasksMaskActive';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Masks Mask Active',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283305
             * type : boolean
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrMaskMasksMaskActive',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Masks Mask Active',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
