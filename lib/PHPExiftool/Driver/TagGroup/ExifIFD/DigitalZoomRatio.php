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
class DigitalZoomRatio extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:DigitalZoomRatio';

    protected string $name = 'DigitalZoomRatio';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Digital Zoom Ratio',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 83560
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Exif::Main.ExifIFD:DigitalZoomRatio',
            'desc' => [
                'en' => 'Digital Zoom Ratio',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
