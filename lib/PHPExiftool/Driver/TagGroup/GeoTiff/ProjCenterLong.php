<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GeoTiff;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProjCenterLong extends AbstractTagGroup
{
    protected string $id = 'GeoTiff:ProjCenterLong';

    protected string $name = 'ProjCenterLong';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Proj Center Long',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GeoTiff::Main
             * line : 96974
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GeoTiff::Main.GeoTiff:ProjCenterLong',
            'desc' => [
                'en' => 'Proj Center Long',
            ],
        ],
    ];

    protected int $count = 0;
}
