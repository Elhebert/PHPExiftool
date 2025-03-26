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
class ImageDataDiscard extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ImageDataDiscard';

    protected string $name = 'ImageDataDiscard';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Image Data Discard',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83987
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ImageDataDiscard',
            'desc' => [
                'en' => 'Image Data Discard',
            ],
        ],
    ];

    protected int $count = 0;
}
