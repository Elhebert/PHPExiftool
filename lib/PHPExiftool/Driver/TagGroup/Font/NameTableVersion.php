<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NameTableVersion extends AbstractTagGroup
{
    protected string $id = 'Font:NameTableVersion';

    protected string $name = 'NameTableVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Name Table Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::Name
             * line : 88770
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:NameTableVersion',
            'desc' => [
                'en' => 'Name Table Version',
            ],
        ],
    ];

    protected int $count = 0;
}
