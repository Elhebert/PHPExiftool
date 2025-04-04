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
class MakerNoteDJIInfo extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteDJIInfo';

    protected string $name = 'MakerNoteDJIInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note DJI Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77747
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteDJIInfo',
            'desc' => [
                'en' => 'Maker Note DJI Info',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83040
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteDJIInfo',
            'desc' => [
                'en' => 'Maker Note DJI Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
