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
class PaintCorrectionExposure extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:PaintCorrectionExposure';

    protected string $name = 'PaintCorrectionExposure';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Paint Correction Exposure',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286931
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:PaintCorrectionExposure',
            'desc' => [
                'en' => 'Paint Correction Exposure',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
