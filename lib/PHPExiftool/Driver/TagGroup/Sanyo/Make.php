<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sanyo;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Make extends AbstractTagGroup
{
    protected string $id = 'Sanyo:Make';

    protected string $name = 'Make';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Make',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::MOV
             * line : 235568
             * type : string
             * writable : false
             * count : 24
             * flags : permanent
             */
            'id' => 'Sanyo::MOV.Sanyo:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
        1 => [
            /**
             * table_name : Sanyo::MP4
             * line : 235613
             * type : string
             * writable : false
             * count : 5
             * flags : permanent
             */
            'id' => 'Sanyo::MP4.Sanyo:Make',
            'desc' => [
                'en' => 'Make',
            ],
        ],
    ];

    protected int $flags = 4;
}
