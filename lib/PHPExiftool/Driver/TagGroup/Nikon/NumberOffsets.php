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
class NumberOffsets extends AbstractTagGroup
{
    protected string $id = 'Nikon:NumberOffsets';

    protected string $name = 'NumberOffsets';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Number Offsets',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ShotInfoD6
             * line : 140042
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoD6.Nikon:NumberOffsets',
            'desc' => [
                'en' => 'Number Offsets',
            ],
        ],
        1 => [
            /**
             * table_name : Nikon::ShotInfoZ7II
             * line : 141155
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ7II.Nikon:NumberOffsets',
            'desc' => [
                'en' => 'Number Offsets',
            ],
        ],
        2 => [
            /**
             * table_name : Nikon::ShotInfoZ9
             * line : 141222
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::ShotInfoZ9.Nikon:NumberOffsets',
            'desc' => [
                'en' => 'Number Offsets',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
