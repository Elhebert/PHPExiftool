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
class Designer extends AbstractTagGroup
{
    protected string $id = 'Font:Designer';

    protected string $name = 'Designer';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Designer',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::Name
             * line : 88782
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::Name.Font:Designer',
            'desc' => [
                'en' => 'Designer',
            ],
        ],
    ];

    protected int $count = 0;
}
