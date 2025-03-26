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
class MaskGroupBasedCorrMaskMasksWholeImageArea extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrMaskMasksWholeImageArea';

    protected string $name = 'MaskGroupBasedCorrMaskMasksWholeImageArea';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Masks Whole Image Area',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286320
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrMaskMasksWholeImageArea',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Masks Whole Image Area',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
