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
class MaskGroupBasedCorrClarity2012 extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrClarity2012';

    protected string $name = 'MaskGroupBasedCorrClarity2012';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Clarity 2012',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286461
             * type : real
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrClarity2012',
            'desc' => [
                'en' => 'Mask Group Based Corr Clarity 2012',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
