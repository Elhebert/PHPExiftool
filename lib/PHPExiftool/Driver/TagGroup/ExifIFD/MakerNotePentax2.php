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
class MakerNotePentax2 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNotePentax2';

    protected string $name = 'MakerNotePentax2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Pentax 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77915
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNotePentax2',
            'desc' => [
                'en' => 'Maker Note Pentax 2',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83208
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNotePentax2',
            'desc' => [
                'en' => 'Maker Note Pentax 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
