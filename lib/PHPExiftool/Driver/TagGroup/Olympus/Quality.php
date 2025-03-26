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
class Quality extends AbstractTagGroup
{
    protected string $id = 'Olympus:Quality';

    protected string $name = 'Quality';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Quality',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::Main
             * line : 177401
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::Main.Olympus:Quality',
            'desc' => [
                'en' => 'Quality',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
