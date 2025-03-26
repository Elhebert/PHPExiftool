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
class PotentialFace7Position extends AbstractTagGroup
{
    protected string $id = 'Sony:PotentialFace7Position';

    protected string $name = 'PotentialFace7Position';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Potential Face 7 Position',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Sony::FaceInfoA
             * line : 246337
             * type : int16u
             * writable : true
             * count : 4
             * flags : permanent
             */
            'id' => 'Sony::FaceInfoA.Sony:PotentialFace7Position',
            'desc' => [
                'en' => 'Potential Face 7 Position',
            ],
        ],
    ];

    protected int $count = 4;

    protected int $flags = 2052;
}
