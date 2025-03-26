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
class MakerNoteKodak8b extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteKodak8b';

    protected string $name = 'MakerNoteKodak8b';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Kodak 8b',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77819
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteKodak8b',
            'desc' => [
                'en' => 'Maker Note Kodak 8b',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83112
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteKodak8b',
            'desc' => [
                'en' => 'Maker Note Kodak 8b',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
