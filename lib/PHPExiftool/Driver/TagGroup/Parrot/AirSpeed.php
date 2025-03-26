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
class AirSpeed extends AbstractTagGroup
{
    protected string $id = 'Parrot:AirSpeed';

    protected string $name = 'AirSpeed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V2
             * line : 282307
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:AirSpeed',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V3
             * line : 282514
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:AirSpeed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
