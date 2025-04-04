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
class MakerNoteCanon extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:MakerNoteCanon';

    protected string $name = 'MakerNoteCanon';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Maker Note Canon',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::AdobeData
             * line : 77738
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'DNG::AdobeData.ExifIFD:MakerNoteCanon',
            'desc' => [
                'en' => 'Maker Note Canon',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 83031
             * type : undef
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:MakerNoteCanon',
            'desc' => [
                'en' => 'Maker Note Canon',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
