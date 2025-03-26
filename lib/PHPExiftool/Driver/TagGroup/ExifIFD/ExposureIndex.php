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
class ExposureIndex extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:ExposureIndex';

    protected string $name = 'ExposureIndex';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Exposure Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82978
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ExposureIndex',
            'desc' => [
                'en' => 'Exposure Index',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83446
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:ExposureIndex',
            'desc' => [
                'en' => 'Exposure Index',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
