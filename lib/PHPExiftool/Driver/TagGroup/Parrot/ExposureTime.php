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
        'en' => 'Exposure Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Parrot::V1
             * line : 195928
             * type : int16s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V1.Parrot:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        1 => [
            /**
             * table_name : Parrot::V2
             * line : 196056
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V2.Parrot:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
        2 => [
            /**
             * table_name : Parrot::V3
             * line : 196172
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Parrot::V3.Parrot:ExposureTime',
            'desc' => [
                'en' => 'Exposure Time',
            ],
        ],
    ];

    protected int $count = 0;
}
