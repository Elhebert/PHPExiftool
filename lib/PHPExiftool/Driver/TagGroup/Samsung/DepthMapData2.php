<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DepthMapData2 extends AbstractTagGroup
{
    protected string $id = 'Samsung:DepthMapData2';

    protected string $name = 'DepthMapData2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Depth Map Data 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 235063
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Samsung::Trailer.Samsung:DepthMapData2',
            'desc' => [
                'en' => 'Depth Map Data 2',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
