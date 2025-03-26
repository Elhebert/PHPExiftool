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
class JPEGTables extends AbstractTagGroup
{
    protected string $id = 'ExifIFD:JPEGTables';

    protected string $name = 'JPEGTables';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'JPEG Tables',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 81866
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:JPEGTables',
            'desc' => [
                'en' => 'JPEG Tables',
            ],
        ],
        1 => [
            /**
             * table_name : Exif::Main
             * line : 81964
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.ExifIFD:JPEGTables',
            'desc' => [
                'en' => 'JPEG Tables',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
