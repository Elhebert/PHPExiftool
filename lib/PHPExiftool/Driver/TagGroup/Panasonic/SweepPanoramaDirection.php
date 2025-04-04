<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SweepPanoramaDirection extends AbstractTagGroup
{
    protected string $id = 'Panasonic:SweepPanoramaDirection';

    protected string $name = 'SweepPanoramaDirection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Sweep Panorama Direction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Main
             * line : 193118
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Main.Panasonic:SweepPanoramaDirection',
            'desc' => [
                'en' => 'Sweep Panorama Direction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
