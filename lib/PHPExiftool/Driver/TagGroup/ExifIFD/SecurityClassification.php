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
class SecurityClassification extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:SecurityClassification';

    protected string $name = 'SecurityClassification';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Security Classification',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82952
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SecurityClassification',
            'desc' => [
                'en' => 'Security Classification',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83437
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:SecurityClassification',
            'desc' => [
                'en' => 'Security Classification',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
