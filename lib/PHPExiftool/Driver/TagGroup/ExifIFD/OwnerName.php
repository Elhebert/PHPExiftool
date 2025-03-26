<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ExifIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OwnerName extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:OwnerName';

    protected string $name = 'OwnerName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Owner Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83671
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:OwnerName',
            'desc' => [
                'en' => 'Owner Name',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 84900
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Exif::Main.ExifIFD:OwnerName',
            'desc' => [
                'en' => 'Owner Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
