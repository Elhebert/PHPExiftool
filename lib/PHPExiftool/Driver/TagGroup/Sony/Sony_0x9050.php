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
class Sony_0x9050 extends AbstractTagGroup
{
    protected string $id = 'Sony:Sony_0x9050';

    protected string $name = 'Sony_0x9050';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sony 0x9050',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Main
             * line : 248319
             * type : ?
             * writable : false
             * count :
             * flags : permanent,unknown
             */
            'id' => 'Sony::Main.Sony:Sony_0x9050',
            'desc' => [
                'en' => 'Sony 0x9050',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 36;
}
