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
class FileAccessDate extends AbstractTagGroup
{
    protected string $id = 'System:FileAccessDate';

    protected string $name = 'FileAccessDate';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'File Access Date/Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85001
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.System:FileAccessDate',
            'desc' => [
                'en' => 'File Access Date/Time',
            ],
        ],
    ];

    protected int $count = 0;
}
