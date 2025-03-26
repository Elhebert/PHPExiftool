<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovieHighISONoiseReduction extends AbstractTagGroup
{
    protected string $id = 'Nikon:MovieHighISONoiseReduction';

    protected string $name = 'MovieHighISONoiseReduction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Movie High ISO Noise Reduction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ7II
             * line : 135200
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ7II.Nikon:MovieHighISONoiseReduction',
            'desc' => [
                'en' => 'Movie High ISO Noise Reduction',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136407
             * type : int8u
             * writable : true
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:MovieHighISONoiseReduction',
            'desc' => [
                'en' => 'Movie High ISO Noise Reduction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2084;
}
