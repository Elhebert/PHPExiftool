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
class ISO extends AbstractTagGroup
{
    protected string $id = 'Parrot:ISO';

    protected string $name = 'ISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195931
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196059
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196175
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:ISO',
            'desc' => [
                'en' => 'ISO',
            ],
        ],
    ];

    protected int $count = 0;
}
