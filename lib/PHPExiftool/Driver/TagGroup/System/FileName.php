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
class FileName extends AbstractTagGroup
{
    protected string $id = 'System:FileName';

    protected string $name = 'FileName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85142
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Extra.System:FileName',
            'desc' => [
                'en' => 'File Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
