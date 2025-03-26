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
class ExposureTime extends AbstractTagGroup
{
    protected string $id = 'Parrot:ExposureTime';

    protected string $name = 'ExposureTime';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 282043
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:ExposureTime',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 282322
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:ExposureTime',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 282526
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:ExposureTime',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
