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
class DroneRoll extends AbstractTagGroup
{
    protected string $id = 'Parrot:DroneRoll';

    protected string $name = 'DroneRoll';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 282031
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:DroneRoll',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
