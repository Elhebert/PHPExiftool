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
class GeoTiffDirectory extends AbstractTagGroup
{
    protected string $id = 'IFD0:GeoTiffDirectory';

    protected string $name = 'GeoTiffDirectory';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Geo Tiff Directory',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82536
             * type : int16u
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.IFD0:GeoTiffDirectory',
            'desc' => [
                'en' => 'Geo Tiff Directory',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
