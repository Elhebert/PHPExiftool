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
class PixelMagicJBIGOptions extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:PixelMagicJBIGOptions';

    protected string $name = 'PixelMagicJBIGOptions';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Pixel Magic JBIG Options',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82457
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:PixelMagicJBIGOptions',
            'desc' => [
                'en' => 'Pixel Magic JBIG Options',
            ],
        ],
    ];

    protected int $count = 0;
}
