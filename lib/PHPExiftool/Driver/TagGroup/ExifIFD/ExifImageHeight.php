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
class ExifImageHeight extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ExifImageHeight';

    protected string $name = 'ExifImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exif Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83381
             * type : int16u
             * writable : true
             * count :
             * flags : mandatory
             */
            'id' => 'Exif::Main.ExifIFD:ExifImageHeight',
            'desc' => [
                'en' => 'Exif Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2176;
}
