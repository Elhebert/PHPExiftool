<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraDateTime extends AbstractTagGroup
{
    protected string $id = 'HP:CameraDateTime';

    protected string $name = 'CameraDateTime';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HP::Type4
             * line : 142203
             * type : string
             * writable : false
             * count : 20
             * flags : permanent
             */
            'id' => 'HP::Type4.HP:CameraDateTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : HP::Type6
             * line : 142282
             * type : string
             * writable : false
             * count : 20
             * flags : permanent
             */
            'id' => 'HP::Type6.HP:CameraDateTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 20;

    protected int $flags = 4;
}
