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
class FileSource extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:FileSource';

    protected string $name = 'FileSource';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'File Source',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83478
             * type : undef
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:FileSource',
            'desc' => [
                'en' => 'File Source',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
