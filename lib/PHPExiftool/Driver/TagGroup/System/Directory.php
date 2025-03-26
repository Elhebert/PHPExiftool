<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\System;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Directory extends AbstractTagGroup
{
    protected string $id = 'System:Directory';

    protected string $name = 'Directory';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Directory',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 84964
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Extra.System:Directory',
            'desc' => [
                'en' => 'Directory',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
