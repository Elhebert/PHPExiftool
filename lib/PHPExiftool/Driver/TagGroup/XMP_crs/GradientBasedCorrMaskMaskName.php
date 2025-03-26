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
class GradientBasedCorrMaskMaskName extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:GradientBasedCorrMaskMaskName';

    protected string $name = 'GradientBasedCorrMaskMaskName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Gradient Based Corr Mask Mask Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285537
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:GradientBasedCorrMaskMaskName',
            'desc' => [
                'en' => 'Gradient Based Corr Mask Mask Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
