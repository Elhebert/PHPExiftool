<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Duration extends AbstractTagGroup
{
    protected string $id = 'Olympus:Duration';

    protected string $name = 'Duration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::DSS
             * line : 174420
             * type : string
             * writable : false
             * count : 6
             * flags : permanent
             */
            'id' => 'Olympus::DSS.Olympus:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
        1 => [
            /**
             * table_name : Olympus::WAV
             * line : 181261
             * type : int32u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::WAV.Olympus:Duration',
            'desc' => [
                'en' => 'Duration',
            ],
        ],
    ];

    protected int $count = 6;

    protected int $flags = 4;
}
