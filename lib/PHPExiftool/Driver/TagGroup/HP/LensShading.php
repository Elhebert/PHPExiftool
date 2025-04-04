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
class LensShading extends AbstractTagGroup
{
    protected string $id = 'HP:LensShading';

    protected string $name = 'LensShading';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lens Shading',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HP::Type2
             * line : 98400
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'HP::Type2.HP:LensShading',
            'desc' => [
                'en' => 'Lens Shading',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
