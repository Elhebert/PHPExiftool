<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HDR extends AbstractTagGroup
{
    protected string $id = 'Sony:HDR';

    protected string $name = 'HDR';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'HDR',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 246846
             * type : int32u
             * writable : true
             * count : 2
             * flags : permanent
             */
            'id' => 'Sony::Main.Sony:HDR',
            'desc' => [
                'en' => 'HDR',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2052;
}
