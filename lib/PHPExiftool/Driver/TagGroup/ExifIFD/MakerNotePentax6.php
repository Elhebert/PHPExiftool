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
class MakerNotePentax6 extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNotePentax6';

    protected string $name = 'MakerNotePentax6';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Pentax 6',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77927
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNotePentax6',
            'desc' => [
                'en' => 'Maker Note Pentax 6',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83220
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNotePentax6',
            'desc' => [
                'en' => 'Maker Note Pentax 6',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
