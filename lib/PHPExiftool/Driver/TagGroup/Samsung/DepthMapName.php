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
class DepthMapName extends AbstractTagGroup
{
    protected string $id = 'Samsung:DepthMapName';

    protected string $name = 'DepthMapName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Depth Map Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Trailer
             * line : 235066
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Trailer.Samsung:DepthMapName',
            'desc' => [
                'en' => 'Depth Map Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
