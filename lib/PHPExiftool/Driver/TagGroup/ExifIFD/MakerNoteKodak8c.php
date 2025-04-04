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
class MakerNoteKodak8c extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteKodak8c';

    protected string $name = 'MakerNoteKodak8c';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Kodak 8c',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77822
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteKodak8c',
            'desc' => [
                'en' => 'Maker Note Kodak 8c',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83115
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteKodak8c',
            'desc' => [
                'en' => 'Maker Note Kodak 8c',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
