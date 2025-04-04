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
class SubjectDistance extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SubjectDistance';

    protected string $name = 'SubjectDistance';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82722
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SubjectDistance',
            'desc' => [
                'en' => 'Subject Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
