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
class FileSize extends AbstractTagGroup
{
    protected string $id = 'System:FileSize';

    protected string $name = 'FileSize';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'File Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85154
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.System:FileSize',
            'desc' => [
                'en' => 'File Size',
            ],
        ],
    ];

    protected int $count = 0;
}
