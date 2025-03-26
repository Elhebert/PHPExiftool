<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GeoTiffAsciiParams extends AbstractTagGroup
{
    protected string $id = 'IFD0:GeoTiffAsciiParams';

    protected string $name = 'GeoTiffAsciiParams';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Geo Tiff Ascii Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82542
             * type : string
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.IFD0:GeoTiffAsciiParams',
            'desc' => [
                'en' => 'Geo Tiff Ascii Params',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
