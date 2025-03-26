<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NoiseReductionParametersCamera extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:NoiseReductionParametersCamera';

    protected string $name = 'NoiseReductionParametersCamera';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Noise Reduction Parameters Camera',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107867
             * type : int16u
             * writable : true
             * count : 6
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:NoiseReductionParametersCamera',
            'desc' => [
                'en' => 'Noise Reduction Parameters Camera',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 2052;
}
