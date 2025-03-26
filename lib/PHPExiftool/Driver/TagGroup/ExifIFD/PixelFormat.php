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
class PixelFormat extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:PixelFormat';

    protected string $name = 'PixelFormat';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 118066
             * type : undef
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:PixelFormat',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
