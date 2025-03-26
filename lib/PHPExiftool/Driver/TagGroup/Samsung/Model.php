<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Model extends AbstractTagGroup
{
    protected string $id = 'Samsung:Model';

    protected string $name = 'Model';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::MP4
             * line : 333919
             * type : string
             * writable : false
             * count : 16
             * flags : permanent
             */
            'id' => 'Samsung::MP4.Samsung:Model',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Samsung::sec
             * line : 335661
             * type : string
             * writable : false
             * count : 32
             * flags : permanent
             */
            'id' => 'Samsung::sec.Samsung:Model',
            'desc' => [
            ],
        ],
    ];

    protected int $flags = 4;
}
