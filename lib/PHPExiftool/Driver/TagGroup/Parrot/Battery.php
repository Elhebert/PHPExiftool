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
class Battery extends AbstractTagGroup
{
    protected string $id = 'Parrot:Battery';

    protected string $name = 'Battery';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Battery',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195937
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:Battery',
            'desc' => [
                'en' => 'Battery',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196126
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:Battery',
            'desc' => [
                'en' => 'Battery',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196196
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:Battery',
            'desc' => [
                'en' => 'Battery',
            ],
        ],
    ];

    protected int $count = 0;
}
