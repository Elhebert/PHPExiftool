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
class MaskGroupBasedCorrLuminanceNoise extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:MaskGroupBasedCorrLuminanceNoise';

    protected string $name = 'MaskGroupBasedCorrLuminanceNoise';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Mask Group Based Corr Luminance Noise',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283539
             * type : real
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:MaskGroupBasedCorrLuminanceNoise',
            'desc' => [
                'en' => 'Mask Group Based Corr Luminance Noise',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
