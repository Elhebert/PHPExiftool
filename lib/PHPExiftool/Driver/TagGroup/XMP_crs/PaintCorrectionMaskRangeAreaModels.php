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
class PaintCorrectionMaskRangeAreaModels extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionMaskRangeAreaModels';

    protected string $name = 'PaintCorrectionMaskRangeAreaModels';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 403463
             * type : struct
             * writable : true
             * count :
             * flags : flattened,list,seq
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionMaskRangeAreaModels',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2624;
}
