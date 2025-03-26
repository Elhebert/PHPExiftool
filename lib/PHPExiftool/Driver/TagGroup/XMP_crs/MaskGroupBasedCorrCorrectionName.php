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
class MaskGroupBasedCorrCorrectionName extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:MaskGroupBasedCorrCorrectionName';

    protected string $name = 'MaskGroupBasedCorrCorrectionName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Correction Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 286395
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:MaskGroupBasedCorrCorrectionName',
            'desc' => [
                'en' => 'Mask Group Based Corr Correction Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
