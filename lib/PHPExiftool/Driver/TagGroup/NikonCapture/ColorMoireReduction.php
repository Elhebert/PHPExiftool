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
class ColorMoireReduction extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:ColorMoireReduction';

    protected string $name = 'ColorMoireReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Moire Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::NoiseReduction
             * line : 141951
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::NoiseReduction.NikonCapture:ColorMoireReduction',
            'desc' => [
                'en' => 'Color Moire Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
