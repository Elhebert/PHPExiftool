<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gain extends AbstractTagGroup
{
    protected string $id = 'Panasonic:Gain';

    protected string $name = 'Gain';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gain',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Panasonic::Type2
             * line : 194243
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Panasonic::Type2.Panasonic:Gain',
            'desc' => [
                'en' => 'Gain',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
