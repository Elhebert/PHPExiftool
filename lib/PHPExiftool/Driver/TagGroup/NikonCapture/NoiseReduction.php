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
class NoiseReduction extends AbstractTagGroup
{
    protected string $id = 'NikonCapture:NoiseReduction';

    protected string $name = 'NoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonCapture::Main
             * line : 141747
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::Main.NikonCapture:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : NikonCapture::NoiseReduction
             * line : 141962
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'NikonCapture::NoiseReduction.NikonCapture:NoiseReduction',
            'desc' => [
                'en' => 'Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
