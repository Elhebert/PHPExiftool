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
class MemoryCardConfiguration extends AbstractTagGroup
{
    protected string $id = 'Sony:MemoryCardConfiguration';

    protected string $name = 'MemoryCardConfiguration';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Memory Card Configuration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::ExtraInfo3
             * line : 246163
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::ExtraInfo3.Sony:MemoryCardConfiguration',
            'desc' => [
                'en' => 'Memory Card Configuration',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
