<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PanoramaDirection extends AbstractTagGroup
{
    protected string $id = 'Sony:PanoramaDirection';

    protected string $name = 'PanoramaDirection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Panorama Direction',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::Panorama
             * line : 251809
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Sony::Panorama.Sony:PanoramaDirection',
            'desc' => [
                'en' => 'Panorama Direction',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
