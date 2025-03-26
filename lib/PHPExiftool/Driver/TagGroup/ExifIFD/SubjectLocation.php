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
class SubjectLocation extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SubjectLocation';

    protected string $name = 'SubjectLocation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject Location',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83443
             * type : int16u
             * writable : true
             * count : 2
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SubjectLocation',
            'desc' => [
                'en' => 'Subject Location',
            ],
        ],
    ];

    protected int $count = 2;

    protected int $flags = 2048;
}
