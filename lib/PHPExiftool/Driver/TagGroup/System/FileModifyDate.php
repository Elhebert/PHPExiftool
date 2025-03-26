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
class FileModifyDate extends AbstractTagGroup
{
    protected string $id = 'System:FileModifyDate';

    protected string $name = 'FileModifyDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Modification Date/Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85139
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Extra.System:FileModifyDate',
            'desc' => [
                'en' => 'File Modification Date/Time',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
