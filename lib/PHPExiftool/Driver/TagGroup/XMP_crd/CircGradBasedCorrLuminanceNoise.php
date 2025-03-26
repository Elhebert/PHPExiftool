<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CircGradBasedCorrLuminanceNoise extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CircGradBasedCorrLuminanceNoise';

    protected string $name = 'CircGradBasedCorrLuminanceNoise';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Circ Grad Based Corr Luminance Noise',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 282263
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:CircGradBasedCorrLuminanceNoise',
            'desc' => [
                'en' => 'Circ Grad Based Corr Luminance Noise',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
