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
class MakerNoteReconyx extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteReconyx';

    protected string $name = 'MakerNoteReconyx';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Reconyx',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77933
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteReconyx',
            'desc' => [
                'en' => 'Maker Note Reconyx',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83226
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteReconyx',
            'desc' => [
                'en' => 'Maker Note Reconyx',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
