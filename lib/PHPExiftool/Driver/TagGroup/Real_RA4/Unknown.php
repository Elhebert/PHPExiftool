<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_RA4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Unknown extends AbstractTagGroup
{
    protected string $id = 'Real-RA4:Unknown';

    protected string $name = 'Unknown';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Unknown',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::AudioV4
             * line : 232230
             * type : int32u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:Unknown',
            'desc' => [
                'en' => 'Unknown',
            ],
        ],
        1 => [
            /**
             * table_name : Real::AudioV4
             * line : 232242
             * type : int16u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:Unknown',
            'desc' => [
                'en' => 'Unknown',
            ],
        ],
        2 => [
            /**
             * table_name : Real::AudioV4
             * line : 232248
             * type : int16u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:Unknown',
            'desc' => [
                'en' => 'Unknown',
            ],
        ],
        3 => [
            /**
             * table_name : Real::AudioV4
             * line : 232269
             * type : int8u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:Unknown',
            'desc' => [
                'en' => 'Unknown',
            ],
        ],
        4 => [
            /**
             * table_name : Real::AudioV4
             * line : 232272
             * type : int16u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Real::AudioV4.Real-RA4:Unknown',
            'desc' => [
                'en' => 'Unknown',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
