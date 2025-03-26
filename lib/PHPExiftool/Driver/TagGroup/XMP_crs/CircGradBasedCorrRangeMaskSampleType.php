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
class CircGradBasedCorrRangeMaskSampleType extends AbstractTagGroup
{
    protected string $id = 'XMP-crs:CircGradBasedCorrRangeMaskSampleType';

    protected string $name = 'CircGradBasedCorrRangeMaskSampleType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Range Mask Sample Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crs
             * line : 285164
             * type : integer
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::crs.XMP-crs:CircGradBasedCorrRangeMaskSampleType',
            'desc' => [
                'en' => 'Circ Grad Based Corr Range Mask Sample Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
