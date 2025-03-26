<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifTool;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProcessingTime extends AbstractTagGroup
{
    protected string $id = 'ExifTool:ProcessingTime';

    protected string $name = 'ProcessingTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 121520
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Extra.ExifTool:ProcessingTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
