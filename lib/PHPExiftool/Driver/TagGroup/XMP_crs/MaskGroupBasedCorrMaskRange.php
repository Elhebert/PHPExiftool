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
class MaskGroupBasedCorrMaskRange extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrMaskRange';

    protected string $name = 'MaskGroupBasedCorrMaskRange';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Mask Range',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286122
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrMaskRange',
            'desc' => [
                'en' => 'Mask Group Based Corr Mask Range',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
