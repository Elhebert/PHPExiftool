<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Minolta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'Minolta:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Minolta::MMA
             * line : 124236
             * type : string
             * writable : false
             * count : 20
             * flags : permanent
             */
            'id' => 'Minolta::MMA.Minolta:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        1 => [
            /**
             * table_name : Minolta::MOV1
             * line : 124246
             * type : string
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Minolta::MOV1.Minolta:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        2 => [
            /**
             * table_name : Minolta::MOV2
             * line : 124268
             * type : string
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Minolta::MOV2.Minolta:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $flags = 4;
}
