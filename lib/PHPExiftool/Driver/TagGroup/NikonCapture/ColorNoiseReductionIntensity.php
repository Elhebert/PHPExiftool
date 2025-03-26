<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonCapture;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorNoiseReductionIntensity extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:ColorNoiseReductionIntensity';

    protected string $name = 'ColorNoiseReductionIntensity';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Noise Reduction Intensity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::NoiseReduction
             * line : 141973
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::NoiseReduction.NikonCapture:ColorNoiseReductionIntensity',
            'desc' => [
                'en' => 'Color Noise Reduction Intensity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
