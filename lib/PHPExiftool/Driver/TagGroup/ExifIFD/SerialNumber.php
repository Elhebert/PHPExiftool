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
class SerialNumber extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SerialNumber';

    protected string $name = 'SerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83674
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 84903
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'Exif::Main.ExifIFD:SerialNumber',
            'desc' => [
                'en' => 'Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
