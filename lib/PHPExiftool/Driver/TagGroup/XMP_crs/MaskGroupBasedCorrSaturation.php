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
class MaskGroupBasedCorrSaturation extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrSaturation';

    protected string $name = 'MaskGroupBasedCorrSaturation';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Saturation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286494
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrSaturation',
            'desc' => [
                'en' => 'Mask Group Based Corr Saturation',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
