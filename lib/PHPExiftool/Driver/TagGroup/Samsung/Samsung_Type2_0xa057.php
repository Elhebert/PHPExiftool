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
class Samsung_Type2_0xa057 extends AbstractTagGroup
{
    protected string $id = 'Samsung:Samsung_Type2_0xa057';

    protected string $name = 'Samsung_Type2_0xa057';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 335636
             * type : int32s
             * writable : true
             * count : 8
             * flags : permanent,unknown
             */
            'id' => 'Samsung::Type2.Samsung:Samsung_Type2_0xa057',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 8;

    protected int $flags = 2084;
}
