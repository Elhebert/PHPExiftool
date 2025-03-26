<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Parrot;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Elevation extends AbstractTagGroup
{
    protected string $id = 'Parrot:Elevation';

    protected string $name = 'Elevation';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Elevation',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V2
             * line : 196017
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:Elevation',
            'desc' => [
                'en' => 'Elevation',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V3
             * line : 196136
             * type : int32s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:Elevation',
            'desc' => [
                'en' => 'Elevation',
            ],
        ],
    ];

    protected int $count = 0;
}
