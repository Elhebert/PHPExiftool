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
class ContrastDetectAFInFocus extends AbstractTagGroup
{
    protected string $id = 'Nikon:ContrastDetectAFInFocus';

    protected string $name = 'ContrastDetectAFInFocus';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Contrast Detect AF In Focus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 128907
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:ContrastDetectAFInFocus',
            'desc' => [
                'en' => 'Contrast Detect AF In Focus',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::AFInfo2
             * line : 129808
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::AFInfo2.Nikon:ContrastDetectAFInFocus',
            'desc' => [
                'en' => 'Contrast Detect AF In Focus',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
