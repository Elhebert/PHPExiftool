<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CacheVersion extends AbstractTagGroup
{
    protected string $id = 'SubIFD2:CacheVersion';

    protected string $name = 'CacheVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 120605
             * type : int32u
             * writable : true
             * count : 4
             * flags : unsafe
             */
            'id' => 'Exif::Main.SubIFD2:CacheVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2064;
}
