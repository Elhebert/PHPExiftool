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
class MakerNotePanasonic2 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNotePanasonic2';

    protected string $name = 'MakerNotePanasonic2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Panasonic 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77906
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNotePanasonic2',
            'desc' => [
                'en' => 'Maker Note Panasonic 2',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83199
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNotePanasonic2',
            'desc' => [
                'en' => 'Maker Note Panasonic 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
