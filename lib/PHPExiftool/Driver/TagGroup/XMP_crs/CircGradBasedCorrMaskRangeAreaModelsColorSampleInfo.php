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
class CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo';

    protected string $name = 'CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Mask Range Area Models Color Sample Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 284855
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrMaskRangeAreaModelsColorSampleInfo',
            'desc' => [
                'en' => 'Circ Grad Based Corr Mask Range Area Models Color Sample Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
