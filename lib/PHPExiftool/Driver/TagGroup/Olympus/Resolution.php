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
class Resolution extends AbstractTagGroup
{
    protected string $id = 'Olympus:Resolution';

    protected string $name = 'Resolution';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::TextInfo
             * line : 180336
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Olympus::TextInfo.Olympus:Resolution',
            'desc' => [
                'en' => 'Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
