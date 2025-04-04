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
class GeoTiffDoubleParams extends AbstractTagGroup
{
    protected string $id = 'IFD0:GeoTiffDoubleParams';

    protected string $name = 'GeoTiffDoubleParams';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Geo Tiff Double Params',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82539
             * type : double
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'Exif::Main.IFD0:GeoTiffDoubleParams',
            'desc' => [
                'en' => 'Geo Tiff Double Params',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
