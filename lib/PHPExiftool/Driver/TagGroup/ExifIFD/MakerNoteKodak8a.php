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
class MakerNoteKodak8a extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteKodak8a';

    protected string $name = 'MakerNoteKodak8a';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Kodak 8a',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77816
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteKodak8a',
            'desc' => [
                'en' => 'Maker Note Kodak 8a',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83109
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteKodak8a',
            'desc' => [
                'en' => 'Maker Note Kodak 8a',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
