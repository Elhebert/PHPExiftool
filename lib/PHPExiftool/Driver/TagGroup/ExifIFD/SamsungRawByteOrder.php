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
class SamsungRawByteOrder extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SamsungRawByteOrder';

    protected string $name = 'SamsungRawByteOrder';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 116539
             * type : undef
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SamsungRawByteOrder',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
