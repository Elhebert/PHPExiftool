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
class CodingMethods extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:CodingMethods';

    protected string $name = 'CodingMethods';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Coding Methods',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81923
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:CodingMethods',
            'desc' => [
                'en' => 'Coding Methods',
            ],
        ],
    ];

    protected int $count = 0;
}
