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
class FileAttributes extends AbstractTagGroup
{
    protected string $id = 'System:FileAttributes';

    protected string $name = 'FileAttributes';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'File Attributes',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85004
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.System:FileAttributes',
            'desc' => [
                'en' => 'File Attributes',
            ],
        ],
    ];

    protected int $count = 0;
}
