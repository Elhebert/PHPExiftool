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
class Model extends AbstractTagGroup
{
    protected string $id = 'Sanyo:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Model Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sanyo::MOV
             * line : 235571
             * type : string
             * writable : false
             * count : 8
             * flags : permanent
             */
            'id' => 'Sanyo::MOV.Sanyo:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
        1 => [
            /**
             * table_name : Sanyo::MP4
             * line : 235616
             * type : string
             * writable : false
             * count : 8
             * flags : permanent
             */
            'id' => 'Sanyo::MP4.Sanyo:Model',
            'desc' => [
                'en' => 'Camera Model Name',
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 4;
}
